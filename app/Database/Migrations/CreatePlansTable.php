<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreatePlansTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table)
        {
            $table->id();

            $table->string('type');

            $table->string('duration');

            $table->string('price');

            $table->string('free_space');

            $table->integer('number_of_agents');

            $table->integer('number_of_properties');

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
        Schema::drop('plans');
    }
}
