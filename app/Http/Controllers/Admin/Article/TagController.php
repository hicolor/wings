<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Model\Article\ArticleCategory;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{
    /*
     * tag index
     */
    public function index()
    {
        $categories = ArticleCategory::query()
            ->get();
        return View::make('admin.articlecategory.index',[
            'categories' => $categories
        ]);
    }

    /*
     * tag add
     */
    public function CategoryAdd(Request $request)
    {
        if($request->isMethod('post')){
            $rules = [
                'name' => 'required',
                'mark' => 'required',
                'icon' => 'sometimes',
                'belongsto' => 'required',
                'status' => 'required',
            ];
            $data = Input::only(array_keys($rules));
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            ArticleCategory::create($data);
            return Redirect::to(route('admin-article-category'));
        }
        return View::make('admin.articlecategory.add');
    }

    /*
     * tag edit
     */
    public function CategoryEdit(Request $request)
    {
        if($request->isMethod('post')){
            $rules = [
                'name' => 'required',
                'mark' => 'required',
                'icon' => 'sometimes',
                'belongsto' => 'required',
                'status' => 'required',
            ];
            $data = Input::only(array_keys($rules));
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            ArticleCategory::create($data);
            return Redirect::to(route('admin-article-category'));
        }
        $id = Input::get('id');
        $category = ArticleCategory::find($id);
        if(!$category){
            return redirect('/admin/category');
        }
        return View::make('admin.articlecategory.edit',[
            'category' => $category
        ]);
    }

    /*
     * tag del
     */
    public function delete()
    {
        
    }
}