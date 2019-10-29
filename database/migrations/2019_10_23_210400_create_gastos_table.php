<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('departamento');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('cod_postal');
            $table->string('telefono');
            $table->string('gerente');
            $table->string('destino_viaje');
            $table->bigInteger('pago_efectivo_id')->unsigned()->nullable();
            $table->bigInteger('pago_tarjeta_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->date('fecha');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pago_efectivo_id')->references('id')->on('pago_efectivos');
            $table->foreign('pago_tarjeta_id')->references('id')->on('pago_tarjetas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
