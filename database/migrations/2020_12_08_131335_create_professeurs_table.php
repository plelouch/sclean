<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 45)->nullable();
            $table->string('prenoms', 45)->nullable();
            $table->string('contact', 30)->nullable();
            $table->string('addr')->nullable();
            $table->string('diplome', 45)->nullable();
            $table->string('matricule', 10)->nullable();
            $table->boolean("isDispo")->default(true);
            $table->timestamps();
        });
        Schema::table('parcours', function (Blueprint $table) {
            $table->foreignId('professeur_id')->nullable()->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
