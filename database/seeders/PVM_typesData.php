<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PVM_type;

class PVM_typesData extends Seeder
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
                'tipas'=> '1',
            ],
            [
                'tipas'=> '2',
            ],
            [
                'tipas'=> '3',
            ],
            [
                'tipas'=> '25',
            ],      
            [
                'tipas'=> '26',
            ],
            [
                'tipas'=> '27',
            ],      
            [
                'tipas'=> '5',
            ],
            [
                'tipas'=> '6',
            ],      
            [
                'tipas'=> '8',
            ],
            [
                'tipas'=> '28',
            ],      
            [
                'tipas'=> '29',
            ],
            [
                'tipas'=> '9',
            ],      
            [
                'tipas'=> '30',
            ],
            [
                'tipas'=> '31',
            ], 
            [
                'tipas'=> '32',
            ],  
            [
                'tipas'=> '12',
            ], 
            [
                'tipas'=> '13',
            ], 
            [
                'tipas'=> '14',
            ],  
            [
                'tipas'=> '15',
            ],     
            [
                'tipas'=> '34',
            ], 
            [
                'tipas'=> '16',
            ],  
            [
                'tipas'=> '17',
            ],     
            [
                'tipas'=> '18',
            ], 
            [
                'tipas'=> '35',
            ],  
            [
                'tipas'=> '36',
            ],
            [
                'tipas'=> '19',
            ],  
            [
                'tipas'=> '20',
            ], 
            [
                'tipas'=> '37',
            ],  
            [
                'tipas'=> '38',
            ], 
            [
                'tipas'=> '39',
            ],  
            [
                'tipas'=> '21',
            ], 
            [
                'tipas'=> '40',
            ],  
            [
                'tipas'=> '41',
            ],
            [
                'tipas'=> '42',
            ], 
            [
                'tipas'=> '43',
            ],  
            [
                'tipas'=> '44',
            ], 
            [
                'tipas'=> '45',
            ], 
            [
                'tipas'=> '46',
            ],  
            [
                'tipas'=> '47',
            ], 
            [
                'tipas'=> '23',
            ], 
            [
                'tipas'=> '24',
            ],  
            [
                'tipas'=> '48',
            ], 
            [
                'tipas'=> '49',
            ], 
            [
                'tipas'=> '100',
            ]         
        ];
        
        foreach($posts as $key => $value){
            PVM_type::create($value);            
        }
    }
}
