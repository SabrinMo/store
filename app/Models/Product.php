<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guard=[];

    public function category(){
        return $this->belongsTo(Category::class ,'category_id');
    }

    public function getInStockAttribute(){
        return $this->in_stock ? 'Stock' :' In Stock' ;
    }
    protected $fillable = [
        'title',  'image','old_Price', 'descreption' ,'new_Price' ,'sku', 'in_stock'
    ];
}
