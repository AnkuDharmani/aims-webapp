<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'street',
        'street_code',
        'city_town_suburb',
        'postcode_zipcode',
        'country',
        'state_region_province',
        'linkedin_url',
        'requirements',
        'availability_days',
        'driving_experience',
        'years_with_license',
        'years_driving_commercial',
        'customer_service_experience',
        'skill_level',
        'work_safety',
        'successful_driver',
        
    ];

}
