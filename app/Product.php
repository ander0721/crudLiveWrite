<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public $timestamps;

    protected $primaryKey = "id";
    
    protected $fillable = [
        'name', 'description'
    ];
}
