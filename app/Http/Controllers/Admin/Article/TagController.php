<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class TagController extends Controller
{
    /*
     * tag index
     */
    public function index()
    {
        return View::make('admin.tag.index');
    }

    /*
     * tag add
     */
    public function add()
    {
        return View::make('admin.tag.add');
    }

    /*
     * tag del
     */
    public function delete()
    {
        
    }
}