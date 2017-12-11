<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'id', 'branch_name', 'organization_id', 'address_1', 'address_2', 'city', 'state', 'zipCode', 'office_number', 'email'
    ];

    public function BranchOrganization()
    {
        return $this->hasOne('App\Organization', 'id', 'organization_id');
    }
}
