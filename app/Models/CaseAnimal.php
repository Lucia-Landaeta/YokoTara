<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class CaseAnimal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    // Relacion uno a uno
    public function caseAnimal_prev()
    {
        return $this->hasOne(CaseAnimal::class, 'case_animal_id');
    }
    public function animal()
    {
        return $this->hasOne(Animal::class);
    }
    // Relacion uno a uno -inv
    public function case_animal()
    {
        return $this->belongsTo(CaseAnimal::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    //Relacion muchos a uno
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Relacion uno a muchos
    public function recordCases()
    {
        return $this->hasMany(RecordCase::class);
    }
        // Formato fecha con nombre de dia y mes
        public function dateFormat(){
            $dateC = new Carbon($this->date_publish);
            $date = "".$dateC->day;
            $date .= "/".Str::title($dateC->month);
            $date .= "/".$dateC->year;
            return $date;
        } 
}
