<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $code;
    public $name;
    public $brandName;


    protected $fillable = [
        'code',
        'name',
        'brand_name',
        'contact_name',
        'time_zone',
        'email',
        'website',
        'passenger_code_prefix',
        'slogan',
        'cargo_code_prefix',
        'is_aggregator',
        'max_seats_per_normal_booking',
        'max_seats_per_enroute_booking',
        'allow_normal_passenger_sales',
        'allow_enroute_passenger_sales',
        'allow_cargo_sales',
        'allow_return_sales',
        'allow_other_agents_sales',
        'allow_different_return_seat',
        'max_days_online_sales',
        'max_days_agents_sales',
        'allow_future_cargo_date',
        'allow_future_enroute_date',
        'end_public_sales_before',
        'end_pos_sales_after',
        'cancel_reserve_seat_after',
        'cancel_hold_seat_after',
        'deduct_commission_from'
        
    ];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
