<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CompanyRequest;
use Exception;

class CompanyController extends Controller
{
    public function getAll(){
        try{
            $companies = Company::all();
            return $this->stdResponse(200, 'Success', 'Success', $companies);
        }catch(Exception $e){
            return $this->stdResponse(200, $e->getCode(), 'Failure', '');
        }
    }

    public function getById($id){
        $company = Company::whereId($id)->first();
        if(isset($company)){
            return $this->stdResponse(200, 'Success', 'Success', $company);
        }else{
            return $this->stdResponse(404, 'Failure', 'Not Found', '');
        }
    }

    public function getByCode($code){
        $company = Company::whereCode($code)->first();
        if(isset($company)){
            return $this->stdResponse(200, 'Success', 'Success', $company);
        }else{
            return $this->stdResponse(404, 'Failure', 'Not Found', '');
        }
    }

    public function create(CompanyRequest $request){
        if($request->name == ''){
            return $this->stdResponse(404, 'Failure', 'An Error has occured', '');
        }
        try{
            $company = Company::create([
                /**Basic Details */
                'code' => $request->code,
                'name' => $request->name,
                'brand_name' => $request->brand_name,
                'is_aggregator' => $request->is_aggregator,    
                /**Address */
                'contact_name' => $request->contact_name,
                'email' => $request->email,
                'website' => $request->website,   
                /**Configurations */
                'slogan' => $request->slogan,
                'time_zone' => $request->time_zone,
                'passenger_code_prefix' => $request->passenger_code_prefix,
                'cargo_code_prefix' => $request->cargo_code_prefix,
                'allow_normal_passenger_sales' => $request->allow_normal_passenger_sales,
                'allow_enroute_passenger_sales' => $request->allow_enroute_passenger_sales,
                'allow_cargo_sales' => $request->allow_cargo_sales,
                'allow_return_sales' => $request->allow_return_sales,
                'allow_other_agents_sales' => $request->allow_other_agents_sales,
                'allow_different_return_seat' => $request->allow_different_return_seat,
                'allow_future_cargo_date' => $request->allow_future_cargo_date,
                'allow_future_enroute_date' => $request->allow_future_enroute_date,
                'max_seats_per_normal_booking' => $request->max_seats_per_normal_booking,
                'max_seats_per_enroute_booking' => $request->max_seats_per_enroute_booking,           
                'max_days_online_sales' => $request->max_days_online_sales,
                'max_days_agents_sales' => $request->max_days_agents_sales,
                'end_public_sales_before' => $request->end_public_sales_before,
                'end_pos_sales_after' => $request->end_pos_sales_after,
                'cancel_reserve_seat_after' => $request->cancel_reserve_seat_after,
                'cancel_hold_seat_after' => $request->cancel_hold_seat_after,
                'deduct_commission_from' => $request->deduct_commission_from,
            ]);    
            return $this->stdResponse(200, 'Success', 'Success', $company);
        }catch(Exception $e){
            return $this->stdResponse($e->getCode(), $e->getMessage(), 'Failure', '');
        }
    }

    public function update(CompanyRequest $request, Company $company){

    }

    public function delete(Company $company){

    }

    







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
    public function create1()
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

        /*
        $company = new Company();
        $company->code = $request->code;
        $company->name = $request->name;
        $company->contact_name = $request->contact_name;
        $company->time_zone = $request->time_zone;
        $company->passenger_code_prefix = $request->passenger_code_prefix;
        $company->cargo_code_prefix = $request->cargo_code_prefix;
        $company->slogan = $request->slogan;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->is_aggregator = $request->is_aggregator;
        $company->max_seats_per_normal_booking = $request->max_seats_per_normal_booking;
        $company->max_seats_per_enroute_booking = $request->max_seats_per_enroute_booking;
        $company->allow_normal_passenger_sales = $request->allow_normal_passenger_sales;
        $company->allow_enroute_passenger_sales = $request->allow_enroute_passenger_sales;
        $company->allow_cargo_sales = $request->allow_cargo_sales;
        $company->allow_return_sales = $request->allow_return_sales;
        $company->allow_other_agents_sales = $request->allow_other_agents_sales;
        $company->allow_different_return_seat = $request->allow_different_return_seat;
        $company->max_days_online_sales = $request->max_days_online_sales;
        $company->max_days_agents_sales = $request->max_days_agents_sales;
        $company->allow_future_cargo_date = $request->allow_future_cargo_date;
        $company->allow_future_enroute_date = $request->allow_future_enroute_date;
        $company->end_public_sales_before = $request->end_public_sales_before;
        $company->end_pos_sales_after = $request->end_pos_sales_after;
        $company->cancel_reserve_seat_after = $request->cancel_reserve_seat_after;
        $company->cancel_hold_seat_after = $request->cancel_hold_seat_after;
        $company->deduct_commision_from = $request->deduct_commision_from;

        $company->save();

        */


        $company = Company::create([
            
            /**Basic Details */
            'code' => $request->code,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'is_aggregator' => $request->is_aggregator,

            /**Address */
            'contact_name' => $request->contact_name,
            'email' => $request->email,
            'website' => $request->website,

            /**Configurations */
            'slogan' => $request->slogan,
            'time_zone' => $request->time_zone,
            'passenger_code_prefix' => $request->passenger_code_prefix,
            'cargo_code_prefix' => $request->cargo_code_prefix,
            'allow_normal_passenger_sales' => $request->allow_normal_passenger_sales,
            'allow_enroute_passenger_sales' => $request->allow_enroute_passenger_sales,
            'allow_cargo_sales' => $request->allow_cargo_sales,
            'allow_return_sales' => $request->allow_return_sales,
            'allow_other_agents_sales' => $request->allow_other_agents_sales,
            'allow_different_return_seat' => $request->allow_different_return_seat,
            'allow_future_cargo_date' => $request->allow_future_cargo_date,
            'allow_future_enroute_date' => $request->allow_future_enroute_date,
            'max_seats_per_normal_booking' => $request->max_seats_per_normal_booking,
            'max_seats_per_enroute_booking' => $request->max_seats_per_enroute_booking,           
            'max_days_online_sales' => $request->max_days_online_sales,
            'max_days_agents_sales' => $request->max_days_agents_sales,
            'end_public_sales_before' => $request->end_public_sales_before,
            'end_pos_sales_after' => $request->end_pos_sales_after,
            'cancel_reserve_seat_after' => $request->cancel_reserve_seat_after,
            'cancel_hold_seat_after' => $request->cancel_hold_seat_after,
            'deduct_commission_from' => $request->deduct_commission_from,
        ]);
        //return $this->show($company);

        return $this->stdResponse(200, 'Success', 'Success', $company);
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
    public function update1(UpdateCompanyRequest $request, Company $company)
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



    private function stdResponse($status, $message, $statusMessage, $data){
        return response()
        ->json([
            'status' => $status,
            'message' => $message,
            'status_message' => $statusMessage,
            'data' => $data
        ]);
    }


}
