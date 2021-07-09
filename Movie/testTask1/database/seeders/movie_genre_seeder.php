<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class movie_genre_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('movie_genre')->insert([
//            'movie_id'=>,
//            'genre_id'=>
//        ])
        $movies=Movie::all();
        $genres=Genre::all();
        $data=[];
        for ($i=0; $i<10; $i++){
            $data=[
                'movie_id'=>$movies->random()->id,
                'genre_id'=>$genres->random()->id
            ];
        }

        foreach ($data as $jointTable){
               Movie::create($jointTable);
        }
    }
}
