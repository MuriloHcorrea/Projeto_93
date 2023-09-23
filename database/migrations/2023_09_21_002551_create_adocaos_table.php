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
        Schema::create('adocaos', function (Blueprint $table) {
            $table->increments('id_adocao');
           $table->integer('id_cliente');
           $table->integer('id_usuario');
           $table->integer('id_pet');
           $table->text('status_adocao');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocaos');
    }
};
