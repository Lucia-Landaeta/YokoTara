<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeStatus extends Model
{
    use HasFactory;
    // Relación muchos a uno
    public function notices()
    {
        return $this->hasMany(Notice::class);
    }
}
