<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $book = Book::factory()->create();

        Page::factory()->for($book)->create([
            'content' => null,
        ]);

        User::factory()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
