<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmcarts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->Integer('quentity');
            $table->float('price');
            $table->float('subtotal');
            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')
            ->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('filmcarts');
    }
};
