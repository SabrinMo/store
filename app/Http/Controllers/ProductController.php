<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return response()->view('control.products.index',['products' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('control.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|min:3|max:20',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descreption'=>'required|string|min:3|max:50',
            'sku'=>'required|string|min:3|max:10',
            'old_Price'=>'nullable|integer',
            'new_Price'=>'required|integer',
            'in_stock'=>'nullable | in:on ',
            // 'category_id'=>'required|integer|exsits:categories,id',
        ], [
            'title.required' => 'please , Enter the product name',
            'descreption.required' => 'please , Enter the product description' ,
            'sku.required' => 'please ,Enter the product sku',
            'new_Price.required' => 'please ,Enter the product price'

        ]);

        $input = $request->all();
  
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        // Product::create($input);
     
        // return redirect()->route('products.index')
        //                 ->with('success','Product created successfully.');

     

       $product= new Product();
       $product->title= $request->get('title');
       $product->descreption= $request->get('descreption');
       $product->sku= $request->get('sku');
       $product->old_Price= $request->get('old_Price');
       $product->new_Price= $request->get('new_Price');
       $product->in_stock= $request->has('in_stock');
       
       $isSaved = $product->save();
      if ($isSaved){
        session()->flash('type','success') ;
        session()->flash('message','product saved successfully');
        return redirect()->route('products.index');
        //return redirect()->back();
      }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return response()->view('control.products.edit',['product'=> $product ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();
        if($deleted){
         return redirect()->back();
        };
    }
}
