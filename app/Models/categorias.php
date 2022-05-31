<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public $timestamps = false; //Para no traer las fechas de creacion
    //Campos de la tabla a llamar
    protected $fillable = ['id', 'cat_nom', 'cat_obs'];
}
