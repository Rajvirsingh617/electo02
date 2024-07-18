<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\brand;
use App\Models\category;
use App\Models\unit;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product
        ::join('brands', 'products.brand_id', '=', 'brands.id')
        ->join('units', 'products.unit_id', '=', 'units.id')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->get();
        return view('admin.products.index', ['products' => $products]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return 'create'; 
        // Get Brands
        $brands = Brand::all();
        // Get Category
        $categories = Category::all();
        // Get Unit
        $units = Unit::all();
        return view('admin.products.create',['brands'=>$brands, 'categories'=>$categories, 'units'=>$units]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only('product_name','product_desc','brand_id','unit_id','category_id','mrp','sell_price','qty_available');
        // ClassName::method();

        $prod_thumbnail_img = $request->file('prod_thumbnail_img');
        $prod_thumbnail_img_dst='';                  
        if($prod_thumbnail_img){
            
            $path = $prod_thumbnail_img->store('public/prod_img');
            //The file is comming
             // Extract the filename from the path
            $filename = basename($path);
            $prod_thumbnail_img_dst='/storage/prod_img/'.$filename;
            //dd( );
        }
        $prod_main_img = $request->file('prod_main_img');
        $prod_main_img_dst='';                  
        if($prod_main_img){
            
            $path = $prod_main_img->store('public/prod_img');
            //The file is comming
             // Extract the filename from the path
            $filename = basename($path);
            $prod_main_img_dst='/storage/prod_img/'.$filename;
            //dd( );
        }
        $data['prod_thumbnail_img']=$prod_thumbnail_img_dst;
        $data['prod_main_img']=$prod_main_img_dst;
        Product::create($data);

        //Every function return something
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $filename = basename($product->picture);

        // Define the storage path for the logo
        $storagePath = 'public/prod_images/' . $filename;
        //dd($storagePath);

        // Check if the file exists and delete it
        if (Storage::exists($storagePath)) {
            Storage::delete($storagePath);
            
        }
        $product->delete();

        return back();
    }
}
