<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Product extends Model implements HasMedia

{
    use HasFactory , InteractsWithMedia;

    protected $fillable = [
        'name',
        'status',
        'discount',
        'special_price',
        'mrp',
        'description',
        'link',
    ];


}
