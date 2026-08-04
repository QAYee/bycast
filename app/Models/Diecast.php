<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diecast extends Model
{
    /** @use HasFactory<\Database\Factories\DiecastFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'brand',
        'scale',
        'price',
        'release_date',
        'description',
        'image_url',
    ];
}
