<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Years;

class yearsData extends Seeder
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
                'metai'=> '2020',
            ],
            [
                'metai'=> '2021',
            ],
            [
                'metai'=> '2022',
            ],
            [
                'metai'=> '2023',
            ],  
            [
                'metai'=> '2024',
            ]         
        ];
        
        foreach($posts as $key => $value){
            Years::create($value);            
        }
    }
}
