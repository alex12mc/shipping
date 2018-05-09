<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('numero_tarjeta');
            $table->string('mes_expira');
            $table->string('anio_expira');
            $table->string('cvv');
            $table->string('codigo_postal');
            $table->string('mail');
            $table->float('peso')->nullable();
            $table->float('total')->nullable();
            $table->string('cp_envio')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
