<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','category_id','url_image','description',
    ];
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
