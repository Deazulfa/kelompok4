<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\WhatsappGatewayService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        //$category = Category::all();
        $category = Category::where('nama_kategori', 'LIKE', '%'.$keyword.'%')
            ->get();
        return view('kategori.index', [
            'category' => $category,
            'keyword' => $keyword
        ]);
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);

        return view('kategori.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = [
            'nama_kategori' => $request->nama_kategori
        ];

        Category::where('id', $category->id)->update($data);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category = Category::find($category->id);

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Product deleted successfully');
    }
}
