<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Event extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'details',
        'image',
        'location',
        'date',
        
    ];


    protected static function boot() {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->title);
        });
    }
}
