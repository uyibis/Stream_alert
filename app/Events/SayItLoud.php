<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SayItLoud implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;

    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        $this->username = $username;
        $this->message  = "{$username} liked your status";
    }
    /**
     * Create a new event instance.
     */
    /*public function __construct()
    {
        //
    }*/

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    /*public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }*/
    public function broadcastOn()
    {
        return ['status-liked'];
    }

    public function broadcastAs() {

        return 'event-name';

    }


}
