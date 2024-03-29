<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apparatus extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowingdetail::class);
    }

}
