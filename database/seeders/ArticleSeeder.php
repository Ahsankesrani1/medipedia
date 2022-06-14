<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert(
            [
                [
                    'name' => 'Aspirin',
                    'image' => 'assets\img\Medicines-img\aspirin\1.jpeg',
                    'description' => 'Aspirin Description',
                ],
                [
                    'name' => 'Clarfin',
                    'image' => 'assets\img\Medicines-img\clarfin\download (1).jpeg',
                    'description' => 'Clarfin Description',
                ],
                [
                    'name' => 'Dexamethasone',
                    'image' => 'assets\img\Medicines-img\dexamethasone\d41586-020-01824-5_18087906.jpeg',
                    'description' => 'Dexamethasone Description',
                ],
                [
                    'name' => 'Paracetemol',
                    'image' => 'assets\img\Medicines-img\paracetemol\istockphoto-1022216070-612x612.jpeg',
                    'description' => 'Paracetemol Description',
                ],
                [
                    'name' => 'Remdisiver',
                    'image' => 'assets\img\Medicines-img\remdisiver\image.webp',
                    'description' => 'Remdisiver Description',
                ],
                [
                    'name' => 'Semathicone',
                    'image' => 'assets\img\Medicines-img\semathicone\download.jpeg',
                    'description' => 'Semathicone Description',
                ],
            ]);
    }
}
