<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'street_name', 'street_number','city','state','country', 'post_code'
  ];

  public function address() {
    return $this->belongsTo(User::class);
  }
}
