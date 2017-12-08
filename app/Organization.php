<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'organization_name', 'address_1', 'address_2', 'city', 'state', 'zipcode', 'office_number', 'email'
    ];
}
