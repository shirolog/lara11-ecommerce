<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [

        'name',
        'status',
    ];

    //productsとのリレーション関係

    public function products(){

        return $this->hasMany(Product::class, 'cat_id');
    }

    use HasFactory;
}
