<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class HalamanNewsController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->has('cari')) {
            $news = News::whereHas('category', function ($query) use ($request) {
                $query->where('Nama', 'like', '%' . $request->cari . '%');
            })->get();
        } else {
            $news = News::orderBy('judul', 'asc')->get();
        }

        return view('halamanNews', compact('news', 'request'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
