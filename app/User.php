<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email','email_verified','mobile', 'mobile_verified', 'password','shipping_address', 'billing_address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // user has many orders
    public function orders() {
      return $this->hasMany(Order::class);
    }
    // user has many payments
    public function payments() {
      return $this->hasMany(Payment::class);
    }
    // user has many shipments
    public function shipments() {
      return $this->hasMany(Shipment::class);
    }
    // user has many shippingAddress
    public function shippingAddress() {
      return $this->hasMany(Address::class, 'id', 'shipping_address');
    }
    // user has one billingAddress
    public function billingAddress() {
      return $this->hasOne(Address::class, 'id', 'billing_address');
    }

    // user has on wish imap_list
    public function wishList() {
      return $this->hasOne(Wishlist::class);
    }

    // user has many reviews
    public function reviews() {
      return $this->hasMany(Review::class);
    }

    public function roles() {
      return $this->belongsToMany(Role::class);
    }
}
