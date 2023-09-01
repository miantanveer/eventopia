<?php

namespace App\Helpers;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public function __construct($message)
  {
      $this->message = $message;
  }

  public function broadcastOn()
  {
    // dd($this->message);
      return ['notification-channel',$this->message];
  }

  public function broadcastAs()
  {
      return 'notification-event';
  }
}