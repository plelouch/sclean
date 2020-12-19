<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->id();
            $table->string('libelleParcours', 45)->nullable();
            $table->string('codeParcours', 10)->nullable();
            $table->date('dateCreation')->nullable();
            $table->float('montantScolarite')->default(45000);
            $table->timestamps();
        });
        Schema::table('eleves', function (Blueprint $table) {
            $table->foreignId('parcour_id')->constrained()->onDelete('cascade');
        });
        Schema::table('examens', function (Blueprint $table) {
            $table->foreignId('parcour_id')->nullable()->constrained()->onDelete('cascade');
        });
        Schema::table('matieres', function (Blueprint $table) {
            $table->foreignId('parcour_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcours');
    }
}
