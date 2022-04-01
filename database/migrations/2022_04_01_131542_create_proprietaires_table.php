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
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('codeProprietaire')->unique();
            $table->string('cni')->unique();
            $table->string('nomProprietaire');
            $table->string('prenomProprietaire');
            $table->enum('sexe', ['Masculin', 'Feminin']);
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
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
        Schema::dropIfExists('proprietaires');
    }
};
