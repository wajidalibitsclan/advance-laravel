<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];


    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($product) {
        //     $product->title = "WP-" . $product->title;
        // });
        // static::addGlobalScope(new ActiveScope());
    }
}
