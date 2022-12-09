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
            $table->string("nombre", 100);
            $table->string("razon_social", 100);
            $table->string("rut",12);
            $table->string("direccion", 100);
            $table->string("rubro", 100);
            $table->string("correo", 100);
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
