<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupport extends Model
{
    protected $fillable = ['title', 'message', 'support_type_id', 'user_id', 'order_id'];

    public function supportType() {
      return $this->hasOne(SupportType::class);
    }
    public function user() {
      return $this->belongsTo(User::class);
    }
}
