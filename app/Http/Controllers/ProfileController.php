<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        // Mencari profile berdasarkan username + memuat relasi socialLinks
        $profile = Profile::with('socialLinks')
            ->where('username', $username)
            ->where('is_active', true)
            ->firstOrFail();

        // Mengembalikan view profile.show dengan membawa data $profile
        return view('profile.show', compact('profile'));
    }
}
