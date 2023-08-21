<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleIds = [2, 3, 4, 4, 5, 5, 6, 7, 8, 9, 10 ,11, 11, 11, 11, 11];
        $tagIds = [12, 13, 16, 17, 12, 13, 15, 16, 21, 17, 20, 11, 14, 20, 19, 21];

        foreach(array_map(null, $articleIds, $tagIds) as [$articleId, $tagId]){
            DB::table('add_tags')->insert([
            'article_id' => $articleId,
            'tag_id'=> $tagId
            ]);
        }
    }
}
