<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicine::insert(
            [
                [
                    'name' => 'Aspirin',
                    'image' => 'assets\img\Medicines-img\aspirin\1.jpeg',
                ],
                [
                    'name' => 'Clarfin',
                    'image' => 'assets\img\Medicines-img\clarfin\download (1).jpeg',
                ],
                [
                    'name' => 'Dexamethasone',
                    'image' => 'assets\img\Medicines-img\dexamethasone\d41586-020-01824-5_18087906.jpeg',
                ],
                [
                    'name' => 'Paracetemol',
                    'image' => 'assets\img\Medicines-img\paracetemol\istockphoto-1022216070-612x612.jpeg',
                ],
                [
                    'name' => 'Remdisiver',
                    'image' => 'assets\img\Medicines-img\remdisiver\image.webp',
                ],
                [
                    'name' => 'Semathicone',
                    'image' => 'assets\img\Medicines-img\semathicone\download.jpeg',
                ],
            ]);
    }
}
