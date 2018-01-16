<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categoria(){
        return $this->belongsTo(Categoria::Class);
    }

	public function itempedido(){
		return $this->belongsToMany(Itempedido::Class, 'itempedidos_produtos');
	}

	public function getStatusAttribute($value){
	    return $value == 1 ? 'Ativo' : 'Inativo';
    }
}
