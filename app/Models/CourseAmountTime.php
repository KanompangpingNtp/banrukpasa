<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAmountTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'amount_time_hour',
        'price'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
