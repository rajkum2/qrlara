<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('user_id');//user making transaction
            $table->integer('qrcode_owner_id')->nullable();//finding the number of qrcodes generated for an owner
            $table->integer('qrcode_id');
            $table->string('payment_method')->nullable();//type of payment method, paypal, stripe,
            $table->float('amount',10,4);
            $table->longText('message')->nullable();//message after payment is done or payment is processed
            $table->string('status')->default('initiated');//initiated,completed and payment failed, completed and success
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
        Schema::dropIfExists('transactions');
    }
}
