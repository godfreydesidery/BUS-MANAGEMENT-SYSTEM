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

        $faker = \Faker\Factory::create(1);

        $company = Company::create([
            'code' => $faker->name,
            'name' => $faker->name,
            'brand_name' => $faker->name,
            'contact_name' => $faker->name,
            'email' => $faker->email,
            'website' => $faker->url
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
