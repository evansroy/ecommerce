<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    //
    public function viewCategory()
    {
        return view('admin.category');
    }

    public function addCategory(Request $request)
    {
        $data = new Category();

        $data->category_name=$request->category;
        $data->save();

        return redirect()->back()->with('message','Category added Successfully');
    }
}
