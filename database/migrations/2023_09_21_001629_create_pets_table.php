<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id_pet');
            $table->increments('id_raca');
            $table->increments('id_porte');
            $table->increments('id_cor');
            $table->increments('id_sexo');
            $table->increments('id_historico');
            $table->increments('id_user');
            $table->string('nome',45);
            $table->date('dt_nascimento');
            $table->text('deficiencia');
            $table->string('castrado',45);
            $table->string('peso',45);
            $table->text('vacina');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
