<?php

namespace FunFirst\Reservations\Models\Courses;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseDate extends Model
{
    use SoftDeletes;

    protected $table = 'course_dates';

    protected $fillable = [
        'course_id',
        'from_date',
        'to_date',
        'venue',
        'lecturer',
        'limit',
        'description',
    ];

    protected $dates = [
        'from_date',
        'to_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function course()
    {
        return $this->belongsTo(\FunFirst\Reservations\Models\Courses\Course::class);
    }

    public function reservations()
    {
        return $this->hasMany(\FunFirst\Reservations\Models\Reservations\Reservation::class);
    }
}
