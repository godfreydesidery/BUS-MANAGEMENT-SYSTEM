<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $code = null;
    public $name = '';
    public $brand_name = '';
    public $contact_name = '';
    public $time_zone = '+03:00'; //Set to default value
    public $email = '';
    public $website = '';
    public $passenger_code_prefix = 'PAX';
    public $slogan = 'NA';
    public $cargo_code_prefix = 'CAX';
    public $is_aggregator = false;
    public $max_seats_per_normal_booking = 1;
    public $max_seats_per_enroute_booking = 1;
    public $allow_normal_passenger_sales = false;
    public $allow_enroute_passenger_sales = false;
    public $allow_cargo_sales = false;
    public $allow_return_sales = false;
    public $allow_other_agents_sales = false;
    public $allow_different_return_seat = false;
    public $max_days_online_sales = 14;
    public $max_days_agents_sales = 30;
    public $allow_future_cargo_date = false;
    public $allow_future_enroute_date = false;
    public $end_public_sales_before = '00:30:00';
    public $end_pos_sales_after = '00:30:00';
    public $cancel_reserve_seat_after = '00:15:00';
    public $cancel_hold_seat_after = '00:15:00';
    public $deduct_commision_from = 'OPERATOR';


    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }
    

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
