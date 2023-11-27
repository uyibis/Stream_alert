<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'about',
        'plan_start_date',
        'plan_end_date',
        'alerts_sent',
        'unique_url',
        'is_paid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
