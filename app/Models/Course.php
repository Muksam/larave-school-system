<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'course_name',
        'slug',
        'details',
        'no_of_student'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = Str::slug($course->course_name);
        });
    }
}
