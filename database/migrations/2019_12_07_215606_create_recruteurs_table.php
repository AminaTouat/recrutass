<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email');
            // $table->string('password');
            // $table->boolean('is_super')->default(false);
            // $table->rememberToken();
            // $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('is_super')->default(false);
            $table->string('sitewebentre')->nullable();
           $table->string('adresseentre')->nullable();
           $table->string('telephoneentre')->nullable();
           $table->string('emailentre')->nullable();
           $table->string('discriptionentre')->nullable();
          $table->string('emailrecru')->nullable();
         $table->string('nomrecru')->nullable();
        $table->string('prenomrecru')->nullable();
        $table->string('Sexe')->nullable();
        $table->string('Civilite')->nullable();
        $table->string('linkedIN')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('logoo')->nullable();
        $table->string('avatar')->default('default.jpg');
        $table->integer('telephonerecru')->nullable();
        $table->rememberToken();
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
        Schema::dropIfExists('recruteurs');
    }
}
?>