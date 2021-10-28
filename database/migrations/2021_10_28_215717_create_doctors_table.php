<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->default('text')->unique();
            $table->string('doctor_name')->default('text');
            $table->string('doctor_last_name')->nullable()->default('text');
            $table->string('email')->default('text')->unique();
            $table->string('direccion')->nullable()->default('text');
            $table->enum('especializacion',['neurologo', 'pediatra', 'cardiologo'])->default('cardiologo');
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
        Schema::dropIfExists('doctors');
    }
}
