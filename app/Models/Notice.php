<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    //Relacion muchos a uno
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function notice_status()
    {
        return $this->belongsTo(NoticeStatus::class);
    }

    // Query Scope (query personalizada) para manejo de filtrado 
    public function scopeStatus($query, $status)
    {
        if ($status) {
            return $query->where('notices.notice_status_id', $status);
        }
    }
}
