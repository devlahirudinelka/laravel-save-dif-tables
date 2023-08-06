<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_cat_id',
        'sub_cat_name',
        'sub_cat_status',
        'cat_id'
    ];
}
