<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    use HasFactory;

    public function RegistLists(){
        return $this->hasOne(RegistList::class);
    }
}
