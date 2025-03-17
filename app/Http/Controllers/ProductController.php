<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;  // Tambahkan ini
use Illuminate\Http\RedirectResponse; // Tambahkan ini

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(string $id): View
    {
        $product = Product::findOrFail($id); // Cari produk berdasarkan ID, jika tidak ada, tampilkan error 404
        return view('products.show', compact('product'));
    }

    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'sku' => 'required|unique:products,sku,' . $product->id, // Pastikan SKU unik, kecuali untuk produk ini sendiri
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable',
        ]);

        $product->update($request->all());

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Produk berhasil diperbarui.');
    }
}

