<?php

namespace App\Http\Controllers\Admin\Article;

use App\Model\Article\ArticleTag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Model\Article\ArticleCategory;
use App\Model\Article\Tag;

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
                'id' => 'required',
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
            $category = ArticleCategory::find($data['id']);
            unset($data['id']);
            $category->update($data);
            return Redirect::to(route('admin-article-category'));
        }
        $id = Input::get('id',0);
        $category = ArticleCategory::find($id);
        if(!$category){
            return redirect('/admin/category');
        }
        return View::make('admin.articlecategory.edit',[
            'category' => $category
        ]);
    }

    /**
     * category taglist
     */
    public function taglist()
    {
        $cid = Input::get('cid',0);
        $category = ArticleCategory::find($cid);
        if(!$category){
            return redirect('/admin/articlecategory');
        }
        $taglist = ArticleTag::where('cid',$cid)->get();
        return View::make('admin.articlecategory.taglist',[
            'category' => $category,
            'taglist' => $taglist
        ]);
    }

    /*
     * tag del
     */
    public function delete()
    {
        
    }
}