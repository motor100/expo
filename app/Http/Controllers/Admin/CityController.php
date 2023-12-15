<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cities = City::all();

        return view('dashboard.cities', compact('cities'));
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
    public function show(string $id)
    {
        $city = City::findOrFail($id);
        
        return view('dashboard.cities-show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::findOrFail($id);
        
        return view('dashboard.cities-edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title_ru' => 'required|min:4|max:255',
            'title_en' => 'required|min:4|max:255',
            'title_tr' => 'required|min:4|max:255',
            'date' => 'required|size:10',
            'day_ru' => 'required|min:3|max:20',
            'day_en' => 'required|min:3|max:20',
            'day_tr' => 'required|min:3|max:20',
            'place' => 'required|min:4|max:255',
            'input-main-file' => [
                                'nullable',
                                \Illuminate\Validation\Rules\File::types(['jpg', 'png'])
                                                                    ->min(50)
                                                                    ->max(5 * 1024)
            ],
        ]);

        $city = City::findOrFail($id);

        $image = (new \App\Services\ImageUpdate($city, $validated, 'cities'))->update();

        $city->update([
            // 'title' => $validated["title"],
            // 'image' => $image,
            // 'desc_ru' => $validated["desc-ru"],
            // 'desc_en' => $validated["desc-en"],
            // 'desc_tr' => $validated["desc-tr"]
        ]);

        return redirect('/dashboard/participants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
