<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Kategori::all();

        return view('kategori.index', compact('category'));
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
        $request->validate([
            'Nama' => 'required',
            'Keterangan' => 'required',
        ]);

        $input = $request->all();

        Kategori::create($input);

        return redirect()->route('category.index')
            ->with('Sukses', 'Kategori berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $category)
    {
        return view('kategori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $category)
    {
        $request->validate([
            'Nama' => 'required',
            'Keterangan' => 'required'
        ]);

        $input = $request->all();

        $category->update($input);

        return redirect()->route('category.index')
            ->with('Sukses', 'Kategori berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $category)
    {
        $category->delete();

        return to_route('category.index')->with('Sukses', 'Kategori berhasil dihapus');
    }
}
