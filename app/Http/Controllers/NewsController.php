<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $news = News::with('category')->get();

        return view('news.index', compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data_category = Kategori::all();
        return view('news.create', compact('data_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        News::create($input);

        return redirect()->route('news.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request): View
    {
        if ($request->has('cari')) {
            $news = News::where('kategori', 'like', '%' . $request->cari . '%')->get();
        } else {
            $news = News::orderBy('judul', 'asc')->get();
        }

        return view('homepage.index', compact('news', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news): View
    {
        $data_category = Kategori::all();
        return view('news.edit', compact('news', 'data_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $news->update($input);

        return redirect()->route('news.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news): RedirectResponse
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'Product deleted successfully');
    }
}
