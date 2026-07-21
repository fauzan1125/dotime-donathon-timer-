<?php

namespace App\Http\Controllers;

use App\Models\OverlaySetting;
use Illuminate\Http\Request;

class OverlayController extends Controller
{
    public function show($token)
    {
        // Mencari setting overlay berdasarkan obs_token milik user
        $setting = OverlaySetting::whereHas('user', function($q) use ($token) {
            $q->where('obs_token', $token);
        })->firstOrFail();

        // Mengembalikan view overlay.render dengan membawa data $setting
        return view('overlay.render', compact('setting'));
    }
}
