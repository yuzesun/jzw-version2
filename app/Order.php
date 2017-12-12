<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'branch_id', 'vendor_id', 'order_number', 'shipping_status'
    ];
}
