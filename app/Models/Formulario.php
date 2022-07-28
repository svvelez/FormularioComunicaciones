<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;



    public $messages =[
        'autorizacion.required' => 'si no se autoriza no se puede continuar',
        'fecha.required' => 'indique fecha',
        'actualizacionnombre.required' => 'ingrese nombre ',
        'actualizaciontipodedocumento.required' => 'seleccione tipo de documento',
        'actualizacionnumerodocumento.required' => 'ingrese numero de documento',
        'actualizacioncelular.required' => 'ingrese numero de celular',
        'actualizacionciudad.required' => 'ingrese ciudad',
        'actualizacioncorreo.required' => 'ingrese correo',
        'actualizaciondireccion.required' => 'ingrese dirección',
        'datossensibles.required' => 'debe seleccionar alguna opción',

    ];




}
