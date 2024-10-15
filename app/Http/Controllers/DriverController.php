<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
        // dd('test');
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email', // Unique validation
            'mobile' => 'required|string|unique:drivers,mobile', // Unique validation
            'street' => 'required|string|max:255',
            'street_code' => 'required|string|max:255',
            'city_town_suburb' => 'required|string|max:255',
            'postcode_zipcode' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state_region_province' => 'required|string|max:255',
            'linkedin_url' => 'nullable|url',
            'requirements' => 'required|string',
            'availability_days' => 'required|array',
            'driving_experience' => 'required|string',
            'years_with_license' => 'required|integer|min:0',
            'years_driving_commercial' => 'nullable|string',
            'customer_service_experience' => 'nullable|string',
            'skill_level' => 'nullable|string',
            'work_safety' => 'nullable|string',
            'successful_driver' => 'nullable|string',
        ]);

        // Save the application data
        Driver::create($validated);

        return response()->json(['success' => 'Application submitted successfully!']);
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
