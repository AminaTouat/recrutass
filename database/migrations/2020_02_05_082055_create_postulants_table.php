<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Niveau')->nullable();
            $table->string('dernier_post')->nullable();
            $table->string('type_post')->nullable();
            $table->string('anne_experience')->nullable();
            $table->unsignedBigInteger('candidat_id')->unique();
            $table->foreign('candidat_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('offre_id')->unique();
            $table->foreign('offre_id')
            ->references('id')
            ->on('offres')
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
        Schema::dropIfExists('postulant');
    }
}
