<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoEfectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_efectivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tipo_moneda_id')->unsigned();
            $table->bigInteger('vendedor_id')->unsigned();
            $table->string('fecha');
            $table->string('descripcion');
            $table->string('tarifa_ae');
            $table->string('alojamiento');
            $table->string('comidas');
            $table->string('autos');
            $table->string('telefono');
            $table->string('otros');
            $table->string('total');
            $table->bigInteger('user_id')->unsigned();
            $table->string('archivo')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tipo_moneda_id')->references('id')->on('tipo_monedas');
            $table->foreign('vendedor_id')->references('id')->on('vendedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_efectivos');
    }
}
