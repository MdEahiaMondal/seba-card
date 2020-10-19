<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(array $array)
 */
class Overseer extends Model
{
    use HasFactory, SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }


    protected  $fillable = [
        'name',
        'slug',
        'designation',
        'phone',
        'office_phone',
        'email',
        'batch_no',
        'joining_date',
        'image',
        'office_address',
        'home_address',
        'gender',
        'status',
    ];


    public function setSlugAttribute($value)
    {
        $slug = trim(preg_replace("/[^\w\d]+/i", '-',$value));
        $count = $this->where('slug', 'like', "%${slug}%")->count();
        $slug = $slug.($count + 1);
        $this->attributes['slug'] = strtolower($slug);
    }

    public function getSlugAttribute($value)
    {
        if ($value == null){
            return $this->id;
        }
        return $value;
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
