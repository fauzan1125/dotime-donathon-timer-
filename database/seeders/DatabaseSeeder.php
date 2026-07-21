<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\SocialLink;
use App\Models\OverlaySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Contoh
        $user = User::create([
            'name' => 'Fauzan Lazuri',
            'email' => 'lazuri@example.com',
            'password' => bcrypt('password123'),
            'obs_token' => 'token-test-12345',
            'role' => 'creator',
        ]);

        // 2. Buat Profile Link-in-Bio
        $profile = Profile::create([
            'user_id' => $user->id,
            'username' => 'lazuri1125',
            'display_name' => 'Fauzan | Lazuri Stream',
            'bio' => 'Computer Science Student & Gaming Content Creator',
            'theme_color' => '#0f172a',
            'is_active' => true,
        ]);

        // 3. Buat Link Medsos
        SocialLink::create([
            'profile_id' => $profile->id,
            'title' => 'YouTube Main Channel',
            'url' => 'https://youtube.com',
            'sort_order' => 1,
        ]);

        SocialLink::create([
            'profile_id' => $profile->id,
            'title' => 'TikTok Stream',
            'url' => 'https://tiktok.com',
            'sort_order' => 2,
        ]);

        // 4. Buat Overlay Setting OBS
        OverlaySetting::create([
            'user_id' => $user->id,
            'saweria_overlay_url' => 'https://saweria.co/widgets/alert?streamKey=dummy',
            'sociabuzz_overlay_url' => 'https://sociabuzz.com/dummy/alert',
        ]);
    }
}
