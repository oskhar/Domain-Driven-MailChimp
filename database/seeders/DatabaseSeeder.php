<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Domain\Shared\Models\User;
use App\Domain\Subscriber\Models\Form;
use App\Domain\Subscriber\Models\Subscriber;
use App\Domain\Subscriber\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Form::factory(10)->create();
        Tag::factory(10)->create();
        // Subscriber::factory(10)->create();
        User::factory()->create([
            'email' => 'admin@admin.io',
            'password' => Hash::make('admin')
        ]);
    }
}
