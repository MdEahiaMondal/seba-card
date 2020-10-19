<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    use HasFactory, SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected  $fillable = [
        'our_address',
        'slug',
        'phone',
        'fax',
        'email',
        'web',
        'status'
    ];


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
