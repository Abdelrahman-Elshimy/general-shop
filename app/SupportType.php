<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportType extends Model
{
    protected $fillable = ['type'];

    public function contactsSupport() {
      return $this->hasMany(ContactSupport::class);
    }
}
