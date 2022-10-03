<?php

namespace App\Models;

use App\Models\Breakdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Random extends Model
{
    use HasFactory;

    public function breakdowns(){
        return $this->hasMany(Breakdown::class);
    }
}
