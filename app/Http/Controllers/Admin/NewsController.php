<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'publication_name' => 'required',
            'publication_link' => '',
            'publication_desc' => 'required',
            'publication_type' => 'required',
            'publication_img' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('publication_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['publication_img'] = $imageName;
        }

        News::create($input);

        return redirect('/admin/news')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'publication_name' => 'required',
            'publication_desc' => 'required',
            'publication_link' => '',
            'publication_type' => 'required',
            'publication_img' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('publication_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['publication_img'] = $imageName;
            $filePathToDelete = str_replace('\\', '/', public_path()) . '/' . $news->news_img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['publication_img']);
        }

        $news->update($input);

        return redirect('/admin/news')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) . '/' . $news->news_img;
        if (file_exists($filePathToDelete)) {
            @unlink($filePathToDelete);
        }
        $news->delete();

        return redirect('/admin/news')->with('message', 'Data berhasil dihapus');
    }
}
