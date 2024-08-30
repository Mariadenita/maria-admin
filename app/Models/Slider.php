<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';

    protected $fillable = [
        'large_image', // Stores the image path
        'slider',
        'button_name',
        'nav_link',
    ];
}
