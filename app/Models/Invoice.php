<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'regist_list_id',           
            'Sask_nr',
            'Sask_data',
            'Sask_type_id',
            'Amtrosios_salies_pav',
            'Amtrosios_salies_PVM_kodas',
            'Visa_suma',
            'p_v_m_type_id',  
            'PVM_proc', 
            'PVM_suma'  
    ];
}
