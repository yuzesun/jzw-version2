<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'organization_id', 'branch_id', 'vendor_id', 'order_number', 'order_date', 'etd', 'eta',
        'vendor_payment', 'shipping_status', 'arrival_date', 'comments'
    ];

    public function orderOrg()
    {
        return $this->hasOne('App\Organization', 'id', 'organization_id');
    }

    public function orderBranch()
    {
        return $this->hasOne('App\Branch', 'id', 'branch_id');
    }

    public function orderVendor()
    {
        return $this->hasOne('App\Vendor', 'id', 'vendor_id');
    }

    public function orderStatus()
    {
        return $this->hasOne('App\ShippingStatus', 'id', 'shipping_status');
    }
}
