<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $participants = Participant::orderBy('id', 'desc')->get();
        
        return view('dashboard.participants', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.participants-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'desc-ru' => 'required|min:4|max:255',
            'desc-en' => 'required|min:4|max:255',
            'desc-tr' => 'required|min:4|max:255',
            'input-main-file' => [
                                'required',
                                \Illuminate\Validation\Rules\File::types(['jpg', 'png'])
                                                                    ->min(50)
                                                                    ->max(5 * 1024)
            ]
        ]);

        $image = (new \App\Services\ImageAdd($validated, 'participants'))->add();

        Participant::create([
            'title' => $validated["title"],
            'image' => $image,
            'desc_ru' => $validated["desc-ru"],
            'desc_en' => $validated["desc-en"],
            'desc_tr' => $validated["desc-tr"],
        ]);

        return redirect('/dashboard/participants');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $participant = Participant::findOrFail($id);

        return view('dashboard.participants-show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $participant = Participant::findOrFail($id);

        return view('dashboard.participants-edit', compact('participant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'desc-ru' => 'required|min:4|max:255',
            'desc-en' => 'required|min:4|max:255',
            'desc-tr' => 'required|min:4|max:255',
            'input-main-file' => [
                                'nullable',
                                \Illuminate\Validation\Rules\File::types(['jpg', 'png'])
                                                                    ->min(50)
                                                                    ->max(5 * 1024)
            ]
        ]);

        $participant = Participant::findOrFail($id);

        $image = (new \App\Services\ImageUpdate($participant, $validated, 'participants'))->update();

        $participant->update([
            'title' => $validated["title"],
            'image' => $image,
            'desc_ru' => $validated["desc-ru"],
            'desc_en' => $validated["desc-en"],
            'desc_tr' => $validated["desc-tr"]
        ]);

        return redirect('/dashboard/participants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $slide = Participant::find($id);

        // Удаление файла
        if (Storage::exists($slide->image)) {
            Storage::delete($slide->image);
        }

        $slide->delete();

        return redirect()->back();
    }
}
