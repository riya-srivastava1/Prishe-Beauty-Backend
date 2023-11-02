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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('customer_id');
            // $table->string('title');
            $table->string('name');
            $table->text('address');
            $table->text('email');
            $table->text('phone_no')->nullable();
            // $table->integer('quantity');
            $table->text('order_details');
            // $table->enum('status', ['placed', 'pending', 'processed', 'shipped', 'delivered'])->default('placed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
