<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_name',
        'source_app',
        'amount',
        'sender_message',
        'is_test',
    ];

}
