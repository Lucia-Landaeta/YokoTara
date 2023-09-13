<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion muchos a uno
    public function cases(){
        return $this->hasMany(CaseAnimal::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
