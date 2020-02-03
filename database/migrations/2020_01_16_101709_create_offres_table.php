<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->string('Type')->nullable();
            $table->string('domaine')->nullable();
            $table->string('lieutravail')->nullable();
            $table->integer('annéeExperience')->nullable();
            $table->string('compétence')->nullable();
            $table->integer('prix')->nullable();
            $table->string('statut')->nullable();
            $table->string('niveau')->nullable();
            $table->date('datefin')->nullable();
            $table->string('duréemploi')->nullable();
            $table->string('url')->nullable();
            $table->string('intitule')->nullable();
            $table->string('image_logo')->nullable();
            $table->string('image_fond')->nullable();
            $table->unsignedInteger('recruteur_id')->nullable();
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
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
        Schema::dropIfExists('offres');
    }
}
