<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = Category::all();
        return response()->view('control.categories.index',['categories' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('control.categories.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->has('active'));
        $request->validate([
            'title'=>'required|string|min:3|max:20',
            'is_active'=>'nullable | in:on ',
        ], [
            'title.required' => 'please ,enter category name'
        ]);

       $category = new Category();
      $category->title= $request->get('title');
      $category->active= $request->has('active');
      $isSaved = $category->save();
      if ($isSaved){
        session::flash('type','success') ;
        session::flash('message','category saved successfully');
        return redirect()->route('categories.index');
        //return redirect()->back();
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return response()->view('control.categories.edit',['category'=> $category ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title'=>'required|string|min:3|max:20 ',
            'is_active'=>'in:on ',
        ]);

        $category->title = $request->get('title');
        $category->active = $request->has('active');
        $isSaved = $category->save();
        if ($isSaved){
            return redirect()->route('categories.index');
        }else{
            session::classflash('type','danger') ;
            session::flash('message','update failed!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      $deleted = $category->delete();
      if($deleted){
        return redirect()->back();
      };
    }
}
