<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryarticle extends Model 
{
    protected $fillable = [
        'LibelleCategoryArticle'
    ];
    public function categorie()
    {
        return $this->belongsTo(CategorieArticle::class, 'id');
    }
}

