<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itempedido extends Model
{
    public function pedido(){
        return $this->belongsTo(Pedido::Class);
    }
	
	public function produto(){
		return $this->belongsToMany(Produto::Class, 'itempedidos_produtos');
	}
}
