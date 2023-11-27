<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlData extends Model
{
    use HasFactory;
    protected $fillable = [
        'audio_link',
        'gif_link',
        'alert_duration',
        'sound_volume',
        'min_amount',
        'message_template',
    ];
}
