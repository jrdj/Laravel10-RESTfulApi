<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Create mode_of_payment table
        Schema::create('mode_of_payment', function (Blueprint $table) {
            $table->id();
            $table->string('mop_name');
            $table->timestamps();
        });

        //Insert mode_of_payment default values
        DB::table('mode_of_payment')->insert(
            [
                ['mop_name' => 'Cash', 'created_at' => now()],
                ['mop_name' => 'Gcash', 'created_at' => now()]
            ]
        );

        //Create payment_status table
        Schema::create('payment_status', function (Blueprint $table) {
            $table->id();
            $table->string('ps_name');
            $table->timestamps();
        });
        //Insert payment_status default values
        DB::table('payment_status')->insert(
            [
                ['ps_name' => 'Paid', 'created_at' => now()],
                ['ps_name' => 'Bogus', 'created_at' => now()],
                ['ps_name' => 'To Keep', 'created_at' => now()],
                ['ps_name' => 'TBS', 'created_at' => now()]
            ]
        );

        //Create courier table
        Schema::create('courier', function (Blueprint $table) {
            $table->id();
            $table->string('cor_name');
            $table->timestamps();
        });
        //Insert courier default values
        DB::table('courier')->insert(
            [
                ['cor_name' => 'Meet Up', 'created_at' => now()],
                ['cor_name' => 'Pick Up', 'created_at' => now()],
                ['cor_name' => 'Shipping', 'created_at' => now()]
            ]
        );

        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_owner_id');
            $table->string('consumer_name');
            $table->string('item_code');
            $table->integer('item_quantity');
            $table->integer('item_price');
            $table->integer('shipping_fee');
            $table->unsignedBigInteger('mode_of_payment_id');
            $table->unsignedBigInteger('payment_status_id');
            $table->unsignedBigInteger('courier_id');
            $table->string('location');
            $table->timestamps();

            $table->foreign('sale_owner_id')->references('id')->on('users');
            $table->foreign('mode_of_payment_id')->references('id')->on('mode_of_payment');
            $table->foreign('payment_status_id')->references('id')->on('payment_status');
            $table->foreign('courier_id')->references('id')->on('courier');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
        Schema::dropIfExists('mode_of_payment');
        Schema::dropIfExists('payment_status');
        Schema::dropIfExists('courier');
    }
};
