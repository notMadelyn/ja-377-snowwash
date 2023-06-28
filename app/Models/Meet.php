<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'visitor_id',
        'meet_with'
    ];
    
    public function visitor(){
        return $this->belongsTo(Visitor::class, 'id');
    }
}
