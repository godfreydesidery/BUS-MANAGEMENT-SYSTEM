<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CompanyResource::collection(Company::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {

        //$faker = \Faker\Factory::create(1);

        //$company = Company::create([
            //'code' => $faker->name,
            //'name' => $faker->name,
            //'brand_name' => $faker->name,
            //'contact_name' => $faker->name,
            //'email' => $faker->email,
            //'website' => $faker->url
        //]);

        


        $company = Company::create([
            'code' => $request->code,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'contact_name' => $request->contact_name,
            'time_zone' => $request->time_zone,
            'passenger_code_prefix' => $request->passenger_code_prefix,
            'cargo_code_prefix' => $request->cargo_code_prefix,
            'slogan' => $request->slogan,
            'email' => $request->email,
            'website' => $request->website,
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
        ]);

        return new CompanyResource($company); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //$faker = \Faker\Factory::create(1);

        $company->update([
            'name' => $request->name
        ]);

        return new CompanyResource($company); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response(null, 204);
    }
}
