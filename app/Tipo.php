<?php

namespace catalogo;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
	public function areas()
  {
  
    return $this->belongsToMany('catalogo\Area');
}
