<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'details',
        'image',
        'date'
    ];




    protected static function boot() {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
