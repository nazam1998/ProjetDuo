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
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->bigInteger('id_avatar')->unsigned();
            $table->foreign('id_avatar')->on('avatars')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_role')->unsigned();
            $table->foreign('id_role')->on('roles')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_entreprise')->unsigned();
            $table->foreign('id_entreprise')->on('entreprises')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
