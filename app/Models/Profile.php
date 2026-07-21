<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * Kolom yang boleh diisi secara mass-assignment.
     */
    protected $fillable = [
        'user_id',
        'username',
        'display_name',
        'bio',
        'avatar_path',
        'theme_color',
        'is_active',
    ];

    /**
     * Relasi balik ke User (Profile ini milik siapa).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke SocialLinks (Satu profile punya banyak link medsos).
     */
    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class)->orderBy('sort_order', 'asc');
    }
}