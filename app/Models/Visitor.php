<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plat_nomor',
        'phone_number',
        'merk_motor',
        'date'
    ];

    public function meet(){
        return $this->hasOne(Meet::class, 'id' , 'meet_id');
    }

    public function utility(){
        return $this->hasOne(Utility::class, 'id' , 'utility_id');
    }
}
