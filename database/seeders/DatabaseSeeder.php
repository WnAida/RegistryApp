<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'wan aida',
            'email' => 'staff@staff.com',
            'password' => '12345',
            'email_verified_at' => now(),
        ]);
        Staff::factory(5)->create();
        $this->call(StudentSeeder::class);
    }

}
