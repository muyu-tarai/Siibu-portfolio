<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'IT基礎知識',
            'HTML',
            'CSS',
            'JavaScript',
            'MySQL',
            'PHP',
            'Laravel',
            'GitHub',
            'Linux',
            'VScode',
            'その他'
        ];

        foreach ($items as $item) {
            DB::table('tags')->insert([
                'name' => $item
            ]);
        }
    }
}
