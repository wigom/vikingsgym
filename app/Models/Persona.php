<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    const PARAMETROS = [
        '1' => ['nombre' => 'Cedula', 'nombre_tabla'=>'cedula'],
        '2' => ['nombre' => 'Nombre', 'nombre_tabla' => 'nombre'],
        '3' => ['nombre' => 'Apellido', 'nombre_tabla' => 'apellido'],
        '4' => ['nombre' => 'Fecha Nacimiento', 'nombre_tabla' => 'fechanac'],
        '5' => ['nombre' => 'Sexo', 'nombre_tabla' => 'sexo']
    ];

    protected $table = 'cedulas';

    protected $fillable = [
        'cedula',
        'apellido',
        'nombre',
        'estadociv',
        'fechanac',
        'sexo',
        'profesion',
        'lugarnac',
        'nacional',
        'padre',
        'madre',
        'conyuge',
        'domicilio'
    ];

    protected $dates = [
        'fechanac'
    ];
}
