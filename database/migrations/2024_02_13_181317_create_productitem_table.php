<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productitem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product_Name')->nullable();
            $table->string('Product_Price')->nullable();
            $table->string('Product_Description')->nullable();
            $table->string('Product_Quantity')->nullable();
            $table->string('Product_Image')->nullable();
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
        Schema::dropIfExists('productitem');
    }
}
