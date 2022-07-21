<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   // in place of fillable we used guarded
   protected $guarded =[];

   public function user(){
    return $this->belongsTo(User::class);
   }
   public function OrderItems(){
    return $this->hasMany( OrderItems::class);
   }

   public function product(){
    return $this->belongsToMany(Product::class, 'order_items');
    //here order_items is database table
   }

}
