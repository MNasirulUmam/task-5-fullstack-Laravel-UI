<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function articles()
    // {
    //     return $this->belongsTo(Articles::class);
    // }
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
