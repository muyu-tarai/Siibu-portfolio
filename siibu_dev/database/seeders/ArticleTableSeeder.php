<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'HTML最高';
        $text = 'HTMLが最高なんだ';
        $number_of_like = 99;

        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => $title,
            'text' => $text,
            'number_of_likes' => $number_of_like,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
