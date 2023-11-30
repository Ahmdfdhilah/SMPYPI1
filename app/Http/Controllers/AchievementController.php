<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();

        return view('admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievement.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'achievement_name' => 'required',
            'achievement_desc' => 'required',
            'achievement_date' => 'required',
            'achievement_img' => 'required|image'
        ]);
        $input = $request->all();

        if ($image = $request->file('achievement_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['achievement_img'] = $imageName;
        }

        Achievement::create($input);

        return redirect('/admin/achievements')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'achievement_name' => 'required',
            'achievement_desc' => 'required',
            'achievement_date' => 'required',
            'achievement_img' => 'image'
        ]);
        $input = $request->all();

        if ($image = $request->file('achievement_img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['achievement_img'] = $imageName;
        } else {
            unset($input['achievement_img']);
        }

        $achievement->update($input);

        return redirect('/admin/achievements')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return redirect('/admin/achievements')->with('message', 'Data berhasil dihapus');
    }
}
