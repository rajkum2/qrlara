<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('website')->nullable();//product website url
            $table->string('product_name');
            $table->string('product_url')->nullable();
            $table->string('company_name');
            $table->string('callback_url');//once the qr code is generated it has to return to certain url
            $table->integer('qrcode_path')->nullable();//path where qr code is saved(image)
            $table->float('amount',8,3);
            $table->tinyInteger('status');//whether the qr code is active or not	
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
        Schema::dropIfExists('qrcodes');
    }
}
