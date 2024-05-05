<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ProductController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-product|edit-product|delete-product', ['only' => ['index','show']]);
       $this->middleware('permission:create-product', ['only' => ['create','store']]);
       $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-product', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //echo Role::select("name")->where("id", Auth::id())->value('name');
        if(Role::select("name")->where("id", Auth::id())->value('name') == 'Super Admin')
            return view('products.index', [
                'products' => Product::latest()->paginate(3)
            ]);
        else
            return view('products.index', [
                'products' => Product::where('user_id',Auth::id())->latest()->paginate(3)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {
        //die;
        Product::create($request->all());
        return redirect()->route('products.index')
                ->withSuccess('New product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Check if the logged-in user has access to view this product
        if ($product->user_id == Auth::id() || Role::select("id")->where("id", "=", Auth::id())->value('id') == '1') {
            return view('products.show', compact('product'));
        }else{
        // If the logged-in user doesn't have access, you can redirect them to a different page
            return redirect()->route('dashboard')->with('error', 'You are not authorized to view this product.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Check if the logged-in user has access to view this product
        if ($product->user_id == Auth::id() || Role::select("id")->where("id", "=", Auth::id())->value('id') == '1') {
            return view('products.edit', compact('product'));
        }else{
        // If the logged-in user doesn't have access, you can redirect them to a different page
            return redirect()->route('dashboard')->with('error', 'You are not authorized to view this product.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->all());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index')
                ->withSuccess('Product is deleted successfully.');
    }

    /**
     * 
    */
    public function getProductCount(){
        $count = Product::count();
        return $count;
    }
}