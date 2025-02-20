<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected static ?string $password;

    public function run(): void
    {
        // User::factory(10)->create();
        $users = [[
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'username'=> fake()->unique()->userName,
            'display_name'=> fake()->name(),
            'ep_code' => '670307'
        ],
        [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'username'=> fake()->unique()->userName,
            'display_name'=> fake()->name(),
            'ep_code' => '640304'
        ],
        [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'username'=> fake()->unique()->userName,
            'display_name'=> fake()->name(),
            'ep_code' => '640501'
        ],
        [
            'name' => 'อุมาพร ศรีพุ่มบาง',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'username'=> fake()->unique()->userName,
            'display_name'=> 'ฟ้า',
            'ep_code' => '660501'
        ],
        [
            'name' => 'Mr. ชัยวัสส์ สังข์ทอง',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
            'username'=> fake()->unique()->userName,
            'display_name'=> 'ปลา มติชน',
            'ep_code' => '680103'
        ]];
        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
