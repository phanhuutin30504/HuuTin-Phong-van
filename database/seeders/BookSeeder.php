<?php

namespace Database\Seeders;

use App\Models\BookModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookModel::create([
            'title' => 'Đắc nhân tâm',
            'description' => 'Bài tập phỏng vấn đắc nhân tâm',
            'category_id' => 1,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình',
            'description' => 'Bài tập phỏng vấn lập trình',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình Php',
            'description' => 'Bài tập phỏng vấn lập trình Php cơ bản đến nâng cao',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình Asp',
            'description' => 'Bài tập phỏng vấn lập trình Áp cơ bản đến nâng cao',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình Java',
            'description' => 'Bài tập phỏng vấn lập trình Java cơ bản đến nâng cao',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình Javascript',
            'description' => 'Bài tập phỏng vấn lập trình Javascript cơ bản đến nâng cao',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);
        BookModel::create([
            'title' => 'Bài học lập trình Python',
            'description' => 'Bài tập phỏng vấn lập trình Python cơ bản đến nâng cao',
            'category_id' => 2,
            'author' => 'Hữu Tín'
        ]);


    }
}
