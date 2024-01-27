<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
    protected $fillable = ['Id','Titre', 'Text', 'Description', 'Image', 'CategoryArticleId', 'StatutArticleId', 'auteur', 'slug'];
}

