<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCategory')->nullable();
            $table->string("dishName");
            $table->integer("priceReal");
            $table->integer("discount");
            $table->integer("stock");//serviria para que cosina ingrese un numero de platos que cree que quedan, para que al mozo le aparesca disponible o no
            $table->string("features");//servira para poner algunas caracteristicas del plato o amburguesa, para que el moso tenga que responder si el cliente lo pregunta
            $table->boolean("isActive");
            $table->boolean("status");
            $table->timestamps();

            $table->foreign('idCategory')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishs');
    }
};
