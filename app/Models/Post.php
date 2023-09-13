<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relacion uno a uno 
    public function caseAnimal()
    {
        return $this->hasOne(CaseAnimal::class);
    }
    //Relacion muchos a uno
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
    //Relacion uno a muchos
    public function notices(){
        return $this->hasMany(Notice::class);
    }
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    //Relacion uno a uno entre
    public function animal(){
        return $this->hasOneThrough(Animal::class, CaseAnimal::class);
    }

}
