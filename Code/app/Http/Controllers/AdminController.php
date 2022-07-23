<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use TCG\Voyager\Models\Category;

class AdminController extends Controller
{
    public function view_categories(){

        $data=categories::all();


        return view('Admin.categories', compact('data'));
    }

    public function add_categories(Request $request) {
        $data=new Category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
    }

    public function delete_category($id) {

        $data=categories::find($id);

        $data->delete();

        return redirect()->back()->with('message_delete', 'Category Deleted successfully');;
    }
}
