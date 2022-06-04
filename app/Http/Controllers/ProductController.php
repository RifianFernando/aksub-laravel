<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('index', ['products' => Products::all()]);
    }

    public function addProduct()
    {
        return view('add-product');
    }

    public function addNewProduct(Request $request){
        $vavlidate = validator()->make($request->all(), [
            'title' => 'required|string|min:3|max:255',
            'details' => 'required|numeric',
        ]);


        if($vavlidate->fails()){
            return redirect()->back()->withErrors($vavlidate)->withInput();
        }

        Products::create([
            'name' => $request->title,
            'quantity' => $request->details,
        ]);


        return redirect('index');
    }

    public function editProduct()
    {
        return view('edit-product');
    }
}
