<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
            ]);

            $category = new Category;
            $category->name = $request->name;
            $category->save();

          return redirect()->back();

    } //end store function


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category =  Category::find($id);
        return view('dashboard.category.edit')->with('category',$category);

    } //end edit


    public function update(Request $request, $id)
    {
        $category =  Category::find($id);
        $category->name = $request ->name;
        $category->save();
        return redirect()->route('dashboard.category.index');
    } // end update


    public function destroy(Category $category)
    
    {
        $category->delete();
        return redirect()->route('dashboard.category.index');
    } // end destroy


}
