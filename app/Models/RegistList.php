<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',        
        'saraso_type_id',
        'period_id',
        'year_id'
    ];

    public function year(){
        return $this->belongsTo(Years::class);
    }
}
