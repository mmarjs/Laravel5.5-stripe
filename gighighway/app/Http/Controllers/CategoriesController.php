<?php

namespace GigHighway\Http\Controllers;

use GigHighway\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::query()->topLevel()->with('children.children.children')->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)
            ->with('children.children.children') 
            ->first();

			
        $childCategoryCount = 0;
        foreach($category->children as $child) {
            $childCategoryCount += $child->children->count();
        }

        return view('categories.show', compact('category', 'childCategoryCount'));
    }
}
