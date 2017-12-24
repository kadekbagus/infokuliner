<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('restaurant_id');
            $table->string('restaurant_name', 255);
            $table->integer('city_id')->nullable();
            $table->text('description')->nullable();
            $table->string('tagline', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('status', 10)->default('active');
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
        Schema::dropIfExists('restaurants');
    }
}
