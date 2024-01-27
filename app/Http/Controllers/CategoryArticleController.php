<?php

namespace App\Http\Controllers;

use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class CategoryArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryArticle::all();
        return view('categoryarticles.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CategoryArticle;
        $category->LibelleCategoryArticle = $request->LibelleCategoryArticle;
        $category->save();
        return redirect()->back()->with('alert','L\'article a bien été modifier');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryArticle = CategoryArticle::find($id);
        return view('categoryarticles.edit', compact('categoryArticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoryArticle = CategoryArticle::find($id);
        $categoryArticle->LibelleCategoryArticle = $request->LibelleCategoryArticle;
        $categoryArticle->save();

        return redirect()->route('categoryarticles.index')->with('success','Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryArticle $categoryArticle)
    {
        $categoryarticle->delete();
        return redirect()->route('categoryarticles.index')->with('success','Category deleted successfully.');
    }
}
