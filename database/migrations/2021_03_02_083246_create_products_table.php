<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('productname');
            $table->string('productid')->unique();
            $table->string('productcat');
            $table->string('productprice');
            $table->longText('productdetails');
            $table->string('productqty');
            $table->string('productunit');
            $table->string('productimg');
            $table->string('listedby');
            $table->string('sellerid');
            $table->string('productstatus');
            $table->string('sellername');

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
