<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Http\Controllers\Controller;
class ClientNewsController extends Controller
{
    public function __invoke(Request $request)
    {
        $title = $request->input('title');
        $category = $request->input('category');

        $publications = DB::table('publications')
            ->where('publication_name', 'like', "%$title%")
            ->when($category, function ($query, $category) {
                return $query->where('publication_type', $category);
            })
            ->paginate(8);


        return view('client.dokumentasi.berita.index', ['publications' => $publications]);
    }
    public function show($id)
    {
        $publication = News::findOrFail($id);
        return view('client.dokumentasi.berita.show', compact('publication'));
    }
}
