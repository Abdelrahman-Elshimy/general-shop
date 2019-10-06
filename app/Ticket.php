<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $fillable = ['title', 'message', 'ticket_type_id', 'user_id', 'order_id', 'status'];

  public function ticketType() {
    return $this->hasOne(TicketType::class);
  }
  public function user() {
    return $this->belongsTo(User::class);
  }
}
