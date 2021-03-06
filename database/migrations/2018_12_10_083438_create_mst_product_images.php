<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstProductImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('name');
            $table->string('created_user')->nullable();
            $table->string('updated_user')->nullable();
            $table->string('deleted_user')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_product_images');
    }
}
