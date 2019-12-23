<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')
            ->references('id')
            ->on('formations')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->unsignedBigInteger('candidat_id')->unique();
            $table->foreign('candidat_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
