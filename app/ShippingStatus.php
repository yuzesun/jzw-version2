<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingStatus extends Model
{
    protected $fillable = [
        'id', 'status_name', 'description',
    ];
}
