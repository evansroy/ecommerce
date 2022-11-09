<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\products;

class AdminController extends Controller
{
    //
    public function viewCategory()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function addCategory(Request $request)
    {
        $data = new Category();

        $data->category_name=$request->category;
        $data->save();

        return redirect()->back()->with('message','Category added Successfully');
    }

    public function deleteCategory($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function productView()
    {
        $data = Category::all();
        return view('admin.add_products',compact('data'));
    }

    public function addProducts(Request $request)
    {
        $data = new products();

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productsimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->name;
        $data->description=$request->description;
        $data->image=$request->file;
        $data->category=$request->category;
        $data->quatity=$request->quantity;
        $data->price=$request->price;
        $data->discount_price=$request->discount_price;

        $data->save();

        // dd($data);
        return redirect()->back()->with('message','Product Added Successfully');
    }
}
