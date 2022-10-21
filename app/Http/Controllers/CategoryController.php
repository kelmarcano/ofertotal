<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Product;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subchild = Category::where('role','SubChild')->get();
        //dd($subchild);
        $child = Category::where('role','Child')->get();
        $subs = Category::where('role','sub')->get();
        $categories = Category::where('role','main')->get();
        return view('admin.categories',compact('categories','subs','child','subchild'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'slug' => 'required|max:255|unique:categories',
        ]);

        if ($validator->passes()) {
            $category = new Category;
            $category->fill($request->all());
            $category['role'] = "main";
            if ($file = $request->file('image')){
                $photo_name = Str::random(3).$request->file('image')->getClientOriginalName();
                $file->move('assets/images/category',$photo_name);
                $category['icon'] = $photo_name;
            }
            //dd($category);
            $category->save();
            Session::flash('message', 'Categoria agregada exitosamente.');
            return redirect('admin/categories');
        }
        return redirect()->back()->with('message', 'El alias de la categoria debe de ser unico.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categoryedit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'slug' => 'required|max:255|unique:categories,slug,'.$id,
        ]);

        if ($validator->passes()) {
        $category = Category::findOrFail($id);
        
        $input = $request->all();
        if ($file = $request->file('image')){
            $photo_name = Str::random(3).$request->file('image')->getClientOriginalName();
            $file->move('assets/images/category',$photo_name);
            $input['icon'] = $photo_name;
        }

        $category->update($input);
        Session::flash('message', 'Category Updated Successfully.');
        return redirect('admin/categories');
        }
        return redirect()->back()->with('message', 'Category Slug Must Be Unique.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('message', 'Category Deleted Successfully.');
        return redirect('admin/categories');
    }
    
    //Delete All Category and Its Details
    public function delete($id)
    {
        $category = Category::findOrFail($id);

        $subcategory = Category::where('mainid',$category->id);
        $subcategory->delete();

        if($category->role == "sub"){
            $subchcategory = Category::where('subid',$category->id);
            $subchcategory->delete();
        }

        $childcategory = Category::where('mainid',$category->id);
        $childcategory->delete();

         if($category->role == "subchild"){
            $subchcategory = Category::where('subchild',$category->id);
            $subchcategory->delete();
        }

        $products = Product::whereRaw('FIND_IN_SET(?,category)', [$category->id]);
        $products->delete();

        $category->delete();

        Session::flash('message', 'Category Deleted Successfully.');
        return redirect('admin/categories');
    }
}
