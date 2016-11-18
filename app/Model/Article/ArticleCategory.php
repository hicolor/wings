<?php

namespace App\Model\Article;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_category';

    protected $guarded = ['id'];
}