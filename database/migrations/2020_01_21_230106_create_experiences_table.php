<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titre')->nullable();
            $table->string('Entreprise')->nullable();
            $table->string('Description')->nullable();
            $table->string('Date_debut')->nullable();
            $table->string('Date_fin')->nullable();
            $table->string('Lieu')->nullable();
            $table->string('Type_entreprise')->nullable();
            $table->string('Secteur')->nullable();
            $table->string('Fonction')->nullable();
            $table->string('Niveau')->nullable();



            $table->unsignedBigInteger('cv_id');
            $table->foreign('cv_id')
            ->references('id')
            ->on('cvs')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('experiences');
    }
}
