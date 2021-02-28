<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('username');
            $table->string('fullname');
            $table->string('productCat');
            $table->string('phone1')->unique();
            $table->string('phone2')->unique()->nullable();
            $table->string('address');
            $table->string('pincode');
            $table->string('city');
            $table->string('landmark');
            $table->string('adharCard')->unique()->nullable();
            $table->string('PanCard')->unique()->nullable();
            $table->string('VoterID')->unique()->nullable();
            $table->string('drivingLicence')->unique()->nullable();
            $table->string('adharfront')->nullable();
            $table->string('adharback')->nullable();
            $table->string('pancarddoc')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
