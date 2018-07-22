<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->string('alias', 255)->nullable();
            $table->string('thumb')->nullable();
            $table->text('description')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->float('old_price', 8, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->text('images')->nullable(); // image1.jpg|image2.jpg|image3.jpg ......
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
        Schema::dropIfExists('products');
    }
}
