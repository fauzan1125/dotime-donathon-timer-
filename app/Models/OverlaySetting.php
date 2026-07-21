<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverlaySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'saweria_overlay_url',
        'sociabuzz_overlay_url',
        'agency_tiktok_chat_url',
        'youtube_chat_url',
        'alert_duration',
        'enable_eco_mode',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
