<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumenPagos extends Model
{
    protected $table='resumenpagos';
    protected $primaryKey='id';

    protected $fillable=[
        'user_id',
        'prestamos_id',
        'monto_ministrado',
        'financiado',
        'pagosrealizados',
        'abonados',
        'saldopendiente',
    ];
}
