<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('dni')->unique()->nullable()->default(NULL);
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->integer('telefono')->nullable()->default(NULL);
            $table->string('direccion')->nullable()->default(NULL);
            $table->string('nickName')->unique();
            $table->boolean('es_admin')->nullable()->default(FALSE);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');

    }
}
