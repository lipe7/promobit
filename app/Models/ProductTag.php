<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'product_tag';

    protected $fillable = [
        'product_id',
        'tag_id'
    ];
}
