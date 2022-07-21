<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guard=[];
     
    // protected $appends = ['is_active'];

    public function products(){
        return $this->hasMany(Product::class ,'category_id');
    }
    
    public function getIsActiveAttribute(){
        return $this->active ? 'Active' :' Not Active' ;
    }
}
