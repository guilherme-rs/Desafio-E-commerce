<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function cliente(){
        return $this -> belongsTo(Cliente::Class);
    }

    public function itempedido(){
        return $this->hasMany(Itempedido::Class);
    }

    public function getStatusPedidoAttribute($value){
        return $value == 1 ? 'Em aberto' : 'Fechado';
    }

    public function getStatusPgtoAttribute($value){
        return $value == 1 ? 'Pendente' : 'Realizado';
    }
}
