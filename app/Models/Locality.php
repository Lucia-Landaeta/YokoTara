<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    //Relacion uno a muchos
    public function users(){
        return $this->hasMany(User::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
