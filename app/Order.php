<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'organization_id', 'branch_id', 'vendor_id', 'order_number', 'order_date', 'etd', 'eta',
        'vendor_payment', 'shipping_status', 'arrival_date', 'comments'
    ];
}
