<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    "category_id",
    "sub_category_id",
    "name",
    "price",
    "content",
    "image"
  ];

}