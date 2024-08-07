<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => 'success', 
            'status_code' => '',
            'data' => [
                'type' => 'Company',
                'id' => (string)$this->id,
                'code' => $request->code,
                'name' => $request->name,
                'brand_name' => $request->brand_name,
                'contact_name' => $request->contact_name,
                'email' => $request->email,
                'website' => $request->website,
               
                'time_zone' => $request->time_zone,
                'passenger_code_prefix' => $request->passenger_code_prefix,
                'cargo_code_prefix' => $request->cargo_code_prefix,
                'slogan' => $request->slogan,
                'is_aggregator' => $request->is_aggregator,
                'max_seats_per_normal_booking' => $request->max_seats_per_normal_booking,
                'max_seats_per_enroute_booking' => $request->max_seats_per_enroute_booking,
                'allow_normal_passenger_sales' => $request->allow_normal_passenger_sales,
                'allow_enroute_passenger_sales' => $request->allow_enroute_passenger_sales,
                'allow_cargo_sales' => $request->allow_cargo_sales,
                'allow_return_sales' => $request->allow_return_sales,
                'allow_other_agents_sales' => $request->allow_other_agents_sales,
                'allow_different_return_seat' => $request->allow_different_return_seat,
                'max_days_online_sales' => $request->max_days_online_sales,
                'max_days_agents_sales' => $request->max_days_agents_sales,
                'allow_future_cargo_date' => $request->allow_future_cargo_date,
                'allow_future_enroute_date' => $request->allow_future_enroute_date,
                'end_public_sales_before' => $request->end_public_sales_before,
                'end_pos_sales_after' => $request->end_pos_sales_after,
                'cancel_reserve_seat_after' => $request->cancel_reserve_seat_after,
                'cancel_hold_seat_after' => $request->cancel_hold_seat_after,
                'deduct_commission_from' => $request->deduct_commission_from,

                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'message' => ''         
        ];
    }
}
