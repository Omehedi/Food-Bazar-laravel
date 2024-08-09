<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'details'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }





    //comments create by me
//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
//    }
//
//    public function author1()
//    {
//        return $this->belongsTo(User::class, 'author_id');
//    }
//
//    public function category1()
//    {
//        return $this->belongsTo(Category::class, 'category_id');
//    }

}
