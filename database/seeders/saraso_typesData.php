<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Saraso_type;

class saraso_typesData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'tipas'=> 'Gaunamos',
            ],
            [
                'tipas'=> 'Išrašomos',
            ]           
        ];
        
        foreach($posts as $key => $value){
            Saraso_type::create($value);            
        }
    }
}
