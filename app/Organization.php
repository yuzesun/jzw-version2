<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'id', 'organization_name', 'address_1', 'address_2', 'city', 'state', 'zipCode', 'office_number', 'email'
    ];

    public function organizationBranch()
    {
        return $this->hasMany('App\Branch', 'id', 'organization_id');
    }
}
