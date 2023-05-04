<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Notification;

use App\Notifications\NewProductNotification;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $product = new Product;
        $product->name = request('name');
        $product->desc = request('desc');
        $product->price = request('price');


        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = 'Novajii-' .time().$file->getClientOriginalName();
            Storage::put('storage/images/'.$fileName,file_get_contents($file));
            $product->image = $fileName;
        }

      
    
        $product->save();
       
        $users = User::all();
        Notification::send($users, new NewProductNotification($product));
    
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ]);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       
      $products = Product::all();
      return view('/dashboard', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      
       $product = product::find($id);
       
       return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $id)
    {
        dd($id);
       $this->validate($request, [  
        'name' => 'required',
        'desc' => 'required',
        'price' => 'required',
        'image' => 'required',
       ]);

       $product = product::find( $id);
       
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->price = $request->input('price');
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = 'Novajii-' .time().$file->getClientOriginalName();
            Storage::put('storage/images/'.$fileName,file_get_contents($file));
            $product->image = $fileName;
        }

        $product->save();
        $users = User::all();
        Notification::send($users, new NewProductNotification($product));
    
        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    
       $score = product::find($id);
       $score->delete();
       return Redirect::to('/dashboard')->with('success','Product Deleted');
    }

   
}
