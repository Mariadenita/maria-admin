<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function product()
    {
        return view('product-management');
    }
    public function addproduct()
    {
        return view('addproduct');
    }
    public function upload_product(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'modelnum' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'product_details' => 'required|string',
        'how_to_use' => 'required|string',
        'shipping_details' => 'required|string',
        'price' => 'required|numeric|min:0',
        'weight' => 'required|string|min:0',
        'quantity' => 'required|integer|min:0',
        'large_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'small_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'small_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'small_image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Create a new product instance
    $data = new Product;
    $data->name = $request->input('name');
    $data->modelnum = $request->input('modelnum');
    $data->category = $request->input('category');
    $data->product_details = $request->input('product_details');
    $data->how_to_use = $request->input('how_to_use');
    $data->shipping_details = $request->input('shipping_details');
    $data->price = $request->input('price');
    $data->weight = $request->input('weight');
    $data->quantity = $request->input('quantity');

    // Handle large image upload
    if ($request->hasFile('large_image')) {
        $largeImage = $request->file('large_image');
        $largeImageName = time() . '_large.' . $largeImage->getClientOriginalExtension();
        $largeImage->move(public_path('products'), $largeImageName);
        $data->large_image = $largeImageName;
    }

    // Handle small images upload
    foreach (['small_image1', 'small_image2', 'small_image3'] as $smallImageField) {
        if ($request->hasFile($smallImageField)) {
            $smallImage = $request->file($smallImageField);
            $smallImageName = time() . '_' . $smallImageField . '.' . $smallImage->getClientOriginalExtension();
            $smallImage->move(public_path('products'), $smallImageName);
            $data->$smallImageField = $smallImageName;
        }
    }

    // Save the product to the database
    $data->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Product uploaded successfully.');
}
 public function getProducts()
    {
        // Retrieve all products
        $products = Product::all();
        return response()->json($products);
    }

    
}
