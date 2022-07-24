<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;
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

    public function view_products() {
        $Category=Category::all();
        return view('admin.products', compact('Category'));
    }

    public function add_product(Request $request) {
        $product=new products();

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->category=$request->category;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function show_products() {
        $product=products::all();
        return view('admin.show_products', compact('product'));
    }
}
