<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Box;

class Genre extends Model
{
    use HasFactory;

    public function boxes()
    {
        return $this->hasMany(Box::class);
    }
}
