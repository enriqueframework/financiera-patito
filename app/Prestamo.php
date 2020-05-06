<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table='prestamos';
    protected $primaryKey='id';

    protected $fillable=[
        'user_id',
        'cantidad',
        'numerosdepagos',
        'cuota',
        'total_a_pagar',
        'fecha_ministracion',
        'fecha_vencimiento',
    ];
}
