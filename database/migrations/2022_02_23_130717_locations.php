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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->date('dateDebutLocation');
            $table->date('dateFinLocation');
            $table->string('telephone');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('voiture_id')->constrained();
            $table->string('etat')->default('En cours de traitement');
            $table->string('autoriser')->default('non valider');
            $table->string('rendre')->default('non');
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
        Schema::dropDatabaseIfExists(
            'location'
        );
    }
};
