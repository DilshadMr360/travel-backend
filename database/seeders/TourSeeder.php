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
                'title' => 'Sigirya',
                'description' => 'Sigirya palace ruins on top of a massive 200 meter high rock',
                'price' => 'USD 200.00',
                'image' => 'images/segiriya.jpg',
            ],
            [
                'title' => 'Ambuluwawa',
                'description' => 'Ambuluwawa Tower is a unique, whimsical spiral tower and temple complex perched on a hilltop',
                'price' => 'USD 300.00',
                'image' => 'images/ambuluwawa.jpg',

            ],
            [
                'title' => 'Negombo',
                'description' => 'Negombo City is known for its alluring beaches and centuries-old fishing industry.',
                'price' => 'USD 80.00',
                'image' => 'images/negombo2.jpg',

            ],

            [
                'title' => 'Kandy',
                'description' => 'DSri Dalada Maligawa, commonly known in English as the Temple of the Sacred Tooth Relic',
                'price' => 'USD 100.00',
                'image' => 'images/kandy.jpg',

            ],

            [
                'title' => 'Galle',
                'description' => 'Galle is a city on the southwest coast of Sri Lanka. It’s known for Galle Fort, the fortified old city founded by Portuguese',
                'price' => 'USD 100.00',
                'image' => 'images/galle.jpg',

            ],

            [
                'title' => 'Negombo',
                'description' => 'Negombo City is known for its alluring beaches and centuries-old fishing industry.',
                'price' => 'USD 100.00',
                'image' => 'images/negombo.jpg',

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
