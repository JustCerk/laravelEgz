<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sask_type;

class sask_typesData extends Seeder
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
                'tipas'=> 'Debetinė',
            ],
            [
                'tipas'=> 'Kreditinė',
            ]           
        ];
        
        foreach($posts as $key => $value){
            Sask_type::create($value);            
        }
    }
}
