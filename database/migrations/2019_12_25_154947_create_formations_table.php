<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TitreFormation')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('Description')->nullable();
            $table->string('Date_debut')->nullable();
            $table->string('Date_fin')->nullable();
            $table->string('Lieu')->nullable();
            $table->string('Type_etablissement')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('formations');
    }
}
