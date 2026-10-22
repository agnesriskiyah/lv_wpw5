<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'sku' => 'required|string|max:100|unique:products,sku',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $file = $request->file('image');

        if ($file) {
            $ext = strtolower($file->getClientOriginalExtension());

            $filename = uniqid('product_') . '.'
                . ($ext === 'png' ? 'png' : 'jpg');

            $path = 'products/' . $filename;

            $manager = new ImageManager(Driver::class);

            $image = $manager->decodePath($file->getRealPath())
                ->scaleDown(width: 800, height: 800);

            if ($ext === 'png') {
                $encoded = $image->encodeUsingFileExtension('png');
            } else {
                $encoded = $image->encodeUsingFileExtension('jpg');
            }

            Storage::disk('public')->put($path, (string) $encoded);

            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk ditambahkan');
    }
}