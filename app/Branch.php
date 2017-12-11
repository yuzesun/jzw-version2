<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'branch_name', 'address_1', 'address_2', 'city', 'state', 'zipCode', 'office_number', 'email'
    ];
}
