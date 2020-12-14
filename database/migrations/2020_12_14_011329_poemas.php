<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Poemas extends Migration
{
    public function up()
    {
        if(Schema::hasTable('Poeta')) {
            Schema::table('Poeta', function (Blueprint $table) {
                $table->increments('idPoeta');
                $table->string('nombre', 100);
                $table->string('snombre', 255);
                $table->string('direccion', 255);
                $table->string('cp', 255);
                $table->string('tel', 255);
                $table->timestamps();
            });
        }else{
            Schema::create('Poeta', function (Blueprint $table) {
                $table->increments('idPoeta');
                $table->string('nombre', 100);
                $table->string('snombre', 255);
                $table->string('direccion', 255);
                $table->string('cp', 255);
                $table->string('tel', 255);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::table('Poeta', function (Blueprint $table) {
            Schema::dropIfExists('Poeta');
        });
    }
}
