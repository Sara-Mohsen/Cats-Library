<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\shelter;


class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Shelter::create([
        'breed' => 'Persian',
        'file_number' => 1001,
        'description' => 'Calm and affectionate breed.',
    ]);

    Shelter::create([
        'breed' => 'Siamese',
        'file_number' => 1002,
        'description' => 'Vocal, intelligent, and social.',
    ]);

    Shelter::create([
        'breed' => 'Maine Coon',
        'file_number' => 1003,
        'description' => 'Large, friendly, and playful.',
    ]);

    Shelter::create([
        'breed' => 'British Shorthair',
        'file_number' => 1004,
        'description' => 'Quiet and easygoing companion.',
    ]);

    Shelter::create([
        'breed' => 'Ragdoll',
        'file_number' => 1005,
        'description' => 'Gentle and loves human company.',
    ]);

    Shelter::create([
        'breed' => 'Scottish Fold',
        'file_number' => 1006,
        'description' => 'Known for its folded ears and sweet personality.',
    ]);

    Shelter::create([
        'breed' => 'Bengal',
        'file_number' => 1007,
        'description' => 'Energetic with a wild-looking coat.',
    ]);
}
}

