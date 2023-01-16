<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Period;

class periodsData extends Seeder
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
                'periodas'=> 'Pirmas pusmetis',
            ],
            [
                'periodas'=> 'Antras pusmetis',
            ],  
            [
                'periodas'=> 'Vieni metai',
            ]         
        ];
        
        foreach($posts as $key => $value){
            Period::create($value);            
        }
    }
}
