<?php

namespace App\Http\Controllers\Client;

use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ClientGaleriController extends Controller
{
    public function __invoke()
    {
        $achievements = Achievement::all();
        $eskuls = Extracurricular::all();
        $facilities = Facility::all();
        $publications = News::all();

        $allData = [];

        foreach ($achievements as $achievement) {
            $allData[] = [
                'img' => $achievement->achievement_img,
                'name' => $achievement->achievement_name,
            ];
        }

        foreach ($eskuls as $eskul) {
            $allData[] = [
                'img' => $eskul->eskul_img,
                'name' => $eskul->eskul_name,
            ];
        }

        foreach ($facilities as $facility) {
            $allData[] = [
                'img' => $facility->facilities_img,
                'name' => $facility->facilities_name,
            ];
        }

        foreach ($publications as $publication) {
            $allData[] = [
                'img' => $publication->publication_img,
                'name' => $publication->publication_name,
            ];
        }

        $perPage = 8; 
        $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage() ?? 1;
        $items = array_slice($allData, ($currentPage - 1) * $perPage, $perPage);
        $paginatedData = new \Illuminate\Pagination\LengthAwarePaginator($items, count($allData), $perPage, $currentPage);
 
        $paginatedData->withPath(route('galeri'));
        
        return view('client.dokumentasi.galeri.index', compact('paginatedData'));
    }
}
