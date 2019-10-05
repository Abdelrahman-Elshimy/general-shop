<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';

    public function cities() {
      return $this->hasMany( City::class );
    }
    public function states() {
      return $this->hasMany( State::class );
    }
}
