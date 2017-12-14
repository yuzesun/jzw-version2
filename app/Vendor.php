<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'id', 'vendor_name', 'vendor_address', 'email_1', 'email_2', 'bank_name', 'bank_address', 'bank_swift_code',
        'bank_beneficiary', 'account_number'
    ];
}
