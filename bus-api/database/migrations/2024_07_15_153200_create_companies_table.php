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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('brand_name')->unique();
            $table->string('contact_name')->nullable();
            $table->string('time_zone')->default('+03:00');
            $table->string('passenger_code_prefix')->default('PAX');
            $table->string('cargo_code_prefix')->default('CAX');
            $table->string('slogan')->default('NA');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_aggregator')->default(false);
            $table->integer('max_seats_per_normal_booking')->default(1);
            $table->integer('max_seats_per_enroute_booking')->default(1);
            $table->boolean('allow_normal_passenger_sales')->default(true);
            $table->boolean('allow_enroute_passenger_sales')->default(false);
            $table->boolean('allow_cargo_sales')->default(false);
            $table->boolean('allow_return_sales')->default(false);
            $table->boolean('allow_other_agents_sales')->default(false);
            $table->boolean('allow_different_return_seat')->default(false);
            $table->tinyInteger('max_days_online_sales')->default(30);
            $table->tinyInteger('max_days_agents_sales')->default(30);
            $table->boolean('allow_future_cargo_date')->default(false);
            $table->boolean('allow_future_enroute_date')->default(false);
            $table->time('end_public_sales_before')->default('00:30:00');
            $table->time('end_pos_sales_after')->default('00:30:00');
            $table->time('cancel_reserve_seat_after')->default('00:15:00');
            $table->time('cancel_hold_seat_after')->default('00:15:00');
            $table->string('deduct_commission_from')->default('OPERATOR');

            //$table->string('test_column')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
