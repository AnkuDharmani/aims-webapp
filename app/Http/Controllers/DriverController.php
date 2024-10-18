<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Mail\ThanksDrvierMail;
use Illuminate\Support\Facades\Mail;

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
  
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email',
            'mobile' => 'required|string|unique:drivers,mobile',
            'street' => 'required|string|max:255',
            'street_code' => 'required|string|max:255',
            'city_town_suburb' => 'required|string|max:255',
            'postcode_zipcode' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state_region_province' => 'required|string|max:255',
            'linkedin_url' => 'nullable|url',
            'requirements' => 'required|string',
            'availability_days' => 'required|string', 
            'driving_experience' => 'required|string',
            'years_with_license' => 'required|integer|min:0',
            'years_driving_commercial' => 'nullable|string',
            'customer_service_experience' => 'nullable|string',
            'skill_level' => 'nullable|string',
            'work_safety' => 'nullable|string',
            'successful_driver' => 'nullable|string',
        ]);

        $driverData = $validated;
            unset($driverData['availability_days']); 
            
            $driver = Driver::create($driverData); 
    
        $availabilityDaysArray = explode(',', $validated['availability_days']);
    
            $driver->availability_days = json_encode($availabilityDaysArray); 
               $data= $driver->save(); 
           if($data)
           {
            $mailData = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
            ];
            Mail::to($validated['email'])->send(new ThanksDrvierMail($mailData));
            return response()->json(['success' => 'Application submitted successfully!']);
        }            
          
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
