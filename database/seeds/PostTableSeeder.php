<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips Cepat Nikah','content'=>'lorem ipsum'],
        ['title'=>'Haruskah Menunda Nikah','content'=>'lorem ipsum'],
        ['title'=>'Pembangun Visi Misi Keluarga','content'=>'lorem ipsum']];
    DB::table('posts')->insert($posts);
    }
}