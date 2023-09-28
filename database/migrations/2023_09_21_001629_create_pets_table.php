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
            $table->integer('id_porte');
            $table->integer('id_raca');
            $table->integer('id_cor');
            $table->integer('id_sexo');
            $table->integer('id_historico');
            $table->integer('id_user');
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
