<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_matakuliah',
        'user_id',
        'semester',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
