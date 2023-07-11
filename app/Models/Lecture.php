<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'user_id',
        'email',
        // 'course_id'
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
