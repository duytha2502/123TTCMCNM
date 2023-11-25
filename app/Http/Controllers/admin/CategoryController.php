<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use App\Classes\Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.category.';
        $this->viewnamespace='panel/category';
    }
    public function index()
    {
        $categorys = Categories::all();
        return view($this->viewprefix.'index')->with('cate', $categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewprefix.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Categories();
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category->name = $request->name;
        // $category->image = Helper::imageUpload($request);
        if($category->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
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
    public function edit(Categories $category)
    {
        return view($this->viewprefix.'edit')->with('category', $category);
        // return view($this->viewprefix.'edit',compact('product'));
    }
    public function update(Request $request, Categories $category)
    {
        $data=$request->validate([
            'name' => 'required',
        ]);
        // $data['image'] = $this->imageUpload($request);
        if($category->update($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
    }
    public function destroy(Categories $category)
    {
        if($category->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
    }
    public function productlist($id){
        $products = Category::find($id)->product;
        return view('admin.category.productlist', compact('products'));
    }

    
}
