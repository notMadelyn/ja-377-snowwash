<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'name',
        'plat_nomor',
        'merk_motor'
    ];


    public function major(){
        return $this->hasOne(Major::class, 'id');
    }
}
