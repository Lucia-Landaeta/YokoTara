<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // Relación uno a muchos
    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
