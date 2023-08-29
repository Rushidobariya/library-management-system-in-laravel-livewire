<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();


        // $User = new \App\Models\User;
        // $User->name = 'prince';
        // $User->email = 'user@unityinfoway.com';
        // $User->email_verified_at = '2023-08-28 12:29:34';
        // $User->password = \Hash::make('user@8989');
        // $User->remember_token = 'qkm3JCzJkw';
        // $User->save();
    }
}
