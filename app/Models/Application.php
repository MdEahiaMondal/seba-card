<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'phone',
        'nid_no',
        'father_name',
        'division_id',
        'district_id',
        'upazila_id',
        'union_id',
        'village_name',
        'word_no',
        'holding_no',
        'money',
        'submitted_status',
        'activated_status',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }


    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function upazila()
    {
        return $this->belongsTo(Upazila::class, 'upazila_id');
    }

    public function union()
    {
        return $this->belongsTo(Union::class, 'union_id');
    }


}
