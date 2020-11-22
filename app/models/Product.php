<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager as DB;


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
    public function genPagi($limit) {
    $categories = [];
    $tableName = $this->getTable();
      $rowCount = DB::table($tableName)->get();
      $data = DB::select("SELECT * from $tableName ORDER BY id DESC".$limit);
    foreach ($data as $d) {
      $carbon = new Carbon($d->created_at);
      array_push($categories, [
        "id" => $d->id,
        "name" => $d->name,
        "image" => $d->image,
        "price"=>$d->price,
        "date" => $carbon->toFormattedDateString()
      ]);
    }
return $categories;
  }


}