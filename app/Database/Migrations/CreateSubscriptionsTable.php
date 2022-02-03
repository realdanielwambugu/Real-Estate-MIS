<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateSubscriptionsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('Subscriptions', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->integer('plan_id');

            $table->string('payment_code');

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
        Schema::drop('Subscriptions');
    }
}
