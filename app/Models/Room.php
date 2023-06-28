<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'num'
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'id', 'teacher_id');
    }
}
