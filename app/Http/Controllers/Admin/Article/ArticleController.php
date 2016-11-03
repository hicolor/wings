<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        return View::make('admin.article.index');
    }
}
