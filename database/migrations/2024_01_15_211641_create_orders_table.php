<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uniq')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->text('order_detail'); // [['PRODUCT'=>'PRINT A3','PRICE'=>'500','QUANTITY'=>'500','TOTAL'=>'250000'], ... ];
            $table->bigInteger('total_price');
            $table->boolean('pay')->default(false);
            $table->string('description');
            $table->string('file');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
