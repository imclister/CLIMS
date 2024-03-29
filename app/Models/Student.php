<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }
    public function borrowings()
    {
        return $this->hasMany(Borrower::class);
    }
}
