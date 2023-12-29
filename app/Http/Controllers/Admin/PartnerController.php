<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Storage;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $partners = Partner::all();

        return view('dashboard.partners', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.partners-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_ru' => 'required|min:4|max:255',
            'title_en' => 'required|min:4|max:255',
            'title_tr' => 'required|min:4|max:255',
            'name_ru' => 'required|min:4|max:255',
            'name_en' => 'required|min:4|max:255',
            'name_tr' => 'required|min:4|max:255',
            'input-main-file' => [
                                'required',
                                \Illuminate\Validation\Rules\File::types(['jpg', 'png'])
                                                                    ->min(2)
                                                                    ->max(5 * 1024)
            ]
        ]);

        $image = (new \App\Services\ImageAdd($validated, 'partners'))->add();

        Partner::create([
            'title_ru' => $validated["title_ru"],
            'title_en' => $validated["title_en"],
            'title_tr' => $validated["title_tr"],
            'name_ru' => $validated["name_ru"],
            'name_en' => $validated["name_en"],
            'name_tr' => $validated["name_tr"],
            'image' => $image,
        ]);

        return redirect('/dashboard/partners');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $partner = Partner::findOrFail($id);

        return view('dashboard.partners-show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $partner = Partner::findOrFail($id);

        return view('dashboard.partners-edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'title_ru' => 'required|min:4|max:255',
            'title_en' => 'required|min:4|max:255',
            'title_tr' => 'required|min:4|max:255',
            'name_ru' => 'required|min:4|max:255',
            'name_en' => 'required|min:4|max:255',
            'name_tr' => 'required|min:4|max:255',
            'input-main-file' => [
                                'nullable',
                                \Illuminate\Validation\Rules\File::types(['jpg', 'png'])
                                                                    ->min(2)
                                                                    ->max(5 * 1024)
            ]
        ]);

        $partner = Partner::findOrFail($id);

        $image = (new \App\Services\ImageUpdate($partner, $validated, 'partners'))->update();

        $partner->update([
            'title_ru' => $validated["title_ru"],
            'title_en' => $validated["title_en"],
            'title_tr' => $validated["title_tr"],
            'name_ru' => $validated["name_ru"],
            'name_en' => $validated["name_en"],
            'name_tr' => $validated["name_tr"],
            'image' => $image,
        ]);

        return redirect('/dashboard/partners');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
