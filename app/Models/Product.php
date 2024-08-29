<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'products';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'name', 
        'modelnum', 
        'category', 
        'product_details', 
        'how_to_use', 
        'shipping_details', 
        'price', 
        'weight', 
        'quantity', 
        'large_image', 
        'small_image1', 
        'small_image2', 
        'small_image3'
    ];
    
    // Optionally specify fields that should not be mass assignable
    // protected $guarded = ['id'];
}
