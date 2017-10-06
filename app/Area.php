<?php

namespace catalogo;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  protected $fillable = [
    'Area_Nome',
    'Area_Titular',
    'Area_Telefone',
    'Area_Email',
    'Area_Skype',
    'Area_Endereco',
    'Area_Logo',
    'Area_Alias',
    'Area_Secretaria',
    'Area_Tipo'
  ];

  public function tipos()
  {
  
    return $this->hasOne('catalogo\Tipo');
  }        
}
