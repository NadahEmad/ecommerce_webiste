<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories =Category::with('user')->get();
        return view('pages.dashboard.category.category'
                ,compact('categories')
        );
    }


    public function store(StoreCategoryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->validated();
        $request['user_id']=Auth::id();

        if ($request->hasFile('category_image'))
        {

            $ImageName=$request->file('category_image')->getClientOriginalName();

            $request->category_image->move(public_path('/category_images'), $ImageName);

            $request['image']=$ImageName;

        }

        Category::create($request->all());
        return to_route('categories.index');
    }


    public function edit($id): \Illuminate\Http\JsonResponse
    {
        $category = Category::find($id);
        return response()->json(['data'=>$category]);
    }


    public function update(UpdateCategoryRequest $request)
    {
        $request->validated();
        $request['user_id']=Auth::id();

        if ($request->hasFile('category_image'))
        {
            $ImageName=$request->file('category_image')->getClientOriginalName();

            $request->category_image->move(public_path('/category_images'), $ImageName);

            $request['image']=$ImageName;

        }

        Category::find($request['id'])->update($request->all());
        return response()->json(['message'=>'Category Updated Successfully']);

    }

}
