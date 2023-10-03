<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Subscription;

class Box extends Model
{
    use HasFactory;

    public function genre()
         {
            //many boxes to one genre
             return $this->belongsTo(Genre::class);
         }

         public function subscriptions()
         {
            //one box to many subscriptions
             return $this->hasMany(Subscription::class);
         }
}
