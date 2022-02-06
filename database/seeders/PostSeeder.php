<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++){
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post ' . $i,
                'description' => 'Discription of post' . $i, 
                'text' => '<p>Dolor sit amet consectetur adipisicing elit. Nobis distinctio dolorem ipsum voluptatibus omnis et exercitationem neque ea a aut!<br>'. $i.'</p>', 
                'slug' => 'post-' . $i,
            ]);
        } 
    }
}
