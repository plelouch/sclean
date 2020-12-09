<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nomEleve', 45)->nullable();
            $table->string('prenomsEleve', 45)->nullable();
            $table->date('dateNaissEleve')->nullable();
            $table->string('sexe', 10)->nullable();
            $table->string('lieuNaiss', 45)->nullable();
            $table->string('tuteur', 60)->nullable();
            $table->string('contactTuteur', 14)->nullable();
            $table->string('numMatricul', 15)->nullable();
            $table->string('ecoleProv', 45)->nullable();
            $table->string('photo')->nullable();
            $table->string('niveauEleve', 30)->nullable();
            $table->date('dateInscription')->nullable();
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
        Schema::dropIfExists('eleves');
    }
}
