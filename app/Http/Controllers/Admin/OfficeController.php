<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $offices = Office::orderBy('id', 'desc')->get();
        
        return view('dashboard.offices', compact('offices'));
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
    public function show(string $id): View
    {
        $office = Office::findOrFail($id);

        return view('dashboard.offices-show', compact('office'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $office = Office::findOrFail($id);

        return view('dashboard.offices-edit', compact('office'));
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
            'address_ru' => 'required|min:4|max:255',
            'address_en' => 'required|min:4|max:255',
            'address_tr' => 'required|min:4|max:255',
            'phone' => 'required|min:4|max:20',
            'email' => 'required|min:4|max:100',
            'time' => 'required|min:4|max:20',
        ]);

        $office = Office::findOrFail($id);

        $office->update([
            'title_ru' => $validated["title_ru"],
            'title_en' => $validated["title_en"],
            'title_tr' => $validated["title_tr"],
            'address_ru' => $validated["address_ru"],
            'address_en' => $validated["address_en"],
            'address_tr' => $validated["address_tr"],
            'phone' => $validated["phone"],
            'email' => $validated["email"],
            'time' => $validated["time"],
        ]);

        return redirect('/dashboard/offices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
