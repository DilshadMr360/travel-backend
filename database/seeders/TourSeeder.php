<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'title' => 'Tour Title 1',
                'description' => 'Description of Tour 1',
                'price' => 100.00,
                'image' => 'images/ambuluwawa.jpg',
            ],
            [
                'title' => 'Tour Title 2',
                'description' => 'Description of Tour 2',
                'price' => 450.00,
                'image' => 'images/ambuluwawa.jpg',

            ],
            [
                'title' => 'Tour Title 3',
                'description' => 'Description of Tour 3',
                'price' => 850.00,
                'image' => 'images/ambuluwawa.jpg',

            ],

            [
                'title' => 'Tour Title 4',
                'description' => 'Description of Tour 4',
                'price' => 950.00,
                'image' => 'images/ambuluwawa.jpg',

            ],

            [
                'title' => 'Tour Title 5',
                'description' => 'Description of Tour 5',
                'price' => 150.00,
                'image' => 'images/ambuluwawa.jpg',

            ],

            [
                'title' => 'Tour Title 6',
                'description' => 'Description of Tour 6',
                'price' => 150.00,
                'image' => 'images/ambuluwawa.jpg',

            ],

        ];

        // Loop through the array and create Tour records
        foreach ($tours as $tourData) {
            Tour::create([
                'title' => $tourData['title'],
                'description' => $tourData['description'],
                'price' => $tourData['price'],
                'image' => $tourData['image'],
            ]);
        }
    }
}
