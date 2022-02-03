<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateagentsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table)
        {
            $table->id();

            $table->string('photo');

            $table->string('fullName');

            $table->string('title');

            $table->string('email');

            $table->string('phone');

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
        Schema::drop('agents');
    }
}
