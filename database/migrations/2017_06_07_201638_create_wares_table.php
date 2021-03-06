<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->string('name');
            $table->text('description');
            $table->double('price');
            $table->boolean('new')->default(0);
            $table->boolean('recommended')->default(0);
            $table->boolean('promo')->default(0);
            $table->string('picture')->default('path.jpg');
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
        Schema::dropIfExists('wares');
    }
}
