<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 45)->nullable();
            $table->string('prenoms', 45)->nullable();
            $table->string('login', 45)->nullable();
            $table->text('password')->nullable();
            $table->string('categ', 20)->nullable();
            $table->string('etat', 10)->default('Autorisé');
            $table->string('contact', 30)->nullable();
            $table->date('dateAjout')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
