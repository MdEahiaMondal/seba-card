<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Union extends Model
{
    use HasFactory, SoftDeletes;
     protected $fillable = [
         'upazila_id',
         'name',
         'web_link',
         'slug'
     ];

     public function getRouteKeyName()
     {
         return 'slug';
     }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
