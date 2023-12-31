<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = ['id'];

    // Relacion uno a uno 
    public function caseAnimal()
    {
        return $this->hasOne(CaseAnimal::class);
    }
    //Relacion muchos a uno
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    //Relacion uno a muchos
    public function notices()
    {
        return $this->hasMany(Notice::class);
    }
    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    //Relacion uno a uno entre
    public function animal()
    {
        return $this->hasOneThrough(Animal::class, CaseAnimal::class);
    }

    // Query Scope (query personalizada) para manejo de filtrado de posts
    public function scopeType($query, $type)
    {
        if ($type) {
            return $query->where('posts.type', $type);
        }
    }
    public function scopePet($query, $pet)
    {
        if ($pet) {
            return $query->join('case_animals', 'posts.id', '=', 'case_animals.post_id')->join('animals','case_animals.id','=','animals.case_animal_id')->where('animals.type_animal',$pet);
        }
    }
    public function scopetime($query, $time)
    {
        if ($time) {
            return $query->orderBy('posts.date_publish', $time);
        }
    }
    // Formato fecha con nombre de dia y mes
    public function dateFormat(){
        $dateC = new Carbon($this->date_publish);
        $date = "".Str::title($dateC->dayName);
        $date .= " ".$dateC->day;
        $date .= " de ".Str::title($dateC->monthName);
        $date .= "_".$dateC->year;
        return $date;
    } 
}
