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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('nomPropriete')->unique();
            $table->date('dateEnregistrement');
            $table->integer('nbrEtage');
            $table->integer('nbrPiece');
            $table->float('superficie');
            $table->string('adresse');
            $table->enum('typePropriete', ['appartement', 'chambre', 'duplex', 'villa', 'magasin']);
            $table->foreignId('proprietaire_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('quartier_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('proprietes');
    }
};
