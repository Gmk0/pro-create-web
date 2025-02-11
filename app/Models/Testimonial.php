<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    /** @use HasFactory<\Database\Factories\TestimonialFactory> */
    use HasFactory;



    protected $fillable=[
    "content",
    "client",
    "fonction",
    "image",
    "afficher",

        ];

    public function scopeVisible($query)
    {
        return $query->where('afficher', 1);
    }
}
