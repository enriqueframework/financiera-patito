<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagosRealizados extends Model
{
    protected $table='pagosrealizados';
    protected $primaryKey='id';

    protected $fillable=[
        'user_id',
        'prestamos_id',
        'cantidad',
    ];
}
