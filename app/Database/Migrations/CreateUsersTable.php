<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateUsersTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
            $table->id();

            $table->integer('plan_id');

            $table->string('fullName');

            $table->string('email');

            $table->string('password');

            $table->string('photo')->default('default.jpg');

            $table->string('type')->default('client');

            $table->string('status')->default('active');

            $table->string('code');

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
        Schema::drop('users');
    }
}
