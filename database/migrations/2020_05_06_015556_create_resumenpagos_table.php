<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenpagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenpagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('prestamo_id');
            $table->string('monto_ministrado');
            $table->string('financiado');
            $table->string('pagosrealizados');
            $table->string('abonados');
            $table->string('saldopendiente');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('prestamo_id')
               ->references('id')
               ->on('prestamos');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenpagos');
    }
}
