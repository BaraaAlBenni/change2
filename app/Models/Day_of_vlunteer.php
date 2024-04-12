<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day_of_vlunteer extends Model
{
    use HasFactory;
    protected $fillable = [
        'volunteer_work_id',
        'day',
        'from_hour',
        'to_hour',
    ];

    public function volunteerWork()
    {
        return $this->belongsTo(Volunteer_work::class);
    }
}
