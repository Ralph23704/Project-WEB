<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\data;

class Product extends Model {
    protected $produit=[
        'name',
        'description',
        'image',
        'price',
        'quantity'
    ];



}
