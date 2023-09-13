<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = ['id'];

    // Relacion uno a uno -inv
    public function caseAnimal()
    {
        return $this->belongsTo(CaseAnimal::class);
    }
}
