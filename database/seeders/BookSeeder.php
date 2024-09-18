<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Laravel for Beginners',
                'author' => 'John Doe',
                'isbn' => Str::random(13),
                'quantity_pages' => 350,
                'edition' => '1st Edition',
                'publisher' => 'Tech Books Publishing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering PHP',
                'author' => 'Jane Smith',
                'isbn' => Str::random(13),
                'quantity_pages' => 420,
                'edition' => '2nd Edition',
                'publisher' => 'Web Dev Publishers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Eloquent Techniques',
                'author' => 'Alex Brown',
                'isbn' => Str::random(13),
                'quantity_pages' => 290,
                'edition' => '3rd Edition',
                'publisher' => 'Laravel Press',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
