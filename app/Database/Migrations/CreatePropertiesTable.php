<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreatePropertiesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('Properties', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->string('name');

            $table->string('type');

            $table->string('contract_type');

            $table->string('price');

            $table->string('location');

            $table->string('bedrooms');

            $table->string('bathrooms');

            $table->string('area');

            $table->string('photo');

            $table->text('description');

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
        Schema::drop('Properties');
    }
}
