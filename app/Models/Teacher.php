<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hour_start',
        'hour_end',
        'subject',
        'days_id',
        'room_id',
        'major_id'
    ];

    public function days(){
        return $this->belongsTo(Day::class, 'id');
    }

    public function room(){
        return $this->hasMany(Room::class, 'id', 'room_id');
    }

    public function major(){
        return $this->hasMany(Major::class, 'id', 'major_id');
    }
}