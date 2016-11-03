<?php

namespace App\Http\Controllers\Admin\Common;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    /**
     * main 框架
     */
    public function main()
    {
        return View::make('admin.main.main');
    }

    /**
     * Index
     */
    public function index()
    {
        return View::make('admin.main.index');
    }
}
