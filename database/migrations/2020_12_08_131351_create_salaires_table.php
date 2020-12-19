<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaires', function (Blueprint $table) {
            $table->id();
            $table->decimal('base', 10, 0)->nullable()->default(0);
            $table->decimal('primeA', 10, 0)->nullable()->default(0);
            $table->decimal('primeR', 10, 0)->nullable()->default(0);
            $table->decimal('retenues', 10, 0)->nullable()->default(0);
            $table->decimal('cnss', 10, 0)->nullable()->default(0);
            $table->decimal('avancePers', 10, 0)->nullable()->default(0);
            $table->decimal('TCS', 10, 0)->nullable()->default(0);
            $table->decimal('Acompte', 10, 0)->nullable()->default(0);
            $table->foreignId('professeur_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('salaires');
    }
}
