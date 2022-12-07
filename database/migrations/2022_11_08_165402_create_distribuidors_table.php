<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidors', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 20);
            $table->string("razon_social", 20);
            $table->string("rut",12);
            $table->string("direccion", 30);
            $table->string("rubro", 20);
            $table->string("correo", 20);
            $table->integer("telefono");
            $table->boolean("listaNegraSiNo");
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
        Schema::dropIfExists('distribuidors');
    }
}
