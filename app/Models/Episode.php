<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id' , 'title' , 'body' , 'videoUrl' , 'number' , 'viewCount' , 'commentCount'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
