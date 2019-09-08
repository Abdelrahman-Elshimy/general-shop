<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = ['user_id', 'payment_id', 'order_id', 'status', 'shipment_date'];
}
