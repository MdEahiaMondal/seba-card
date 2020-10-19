<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }

    public function unions()
    {
        return $this->hasMany(Union::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }


}