<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecordCase extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = ['id'];
    
    //Relacion muchos a uno
    public function caseAnimal(){
        return $this->belongsTo(CaseAnimal::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
        //Relacion uno a muchos polimorfica
        public function images()
        {
            return $this->morphMany(Image::class, 'imageable');
        }
}
