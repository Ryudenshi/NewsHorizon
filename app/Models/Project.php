<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'header',
        'catefory_id'
    ];

    public function getCategory(){
        return Category::find($this->category_id);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}