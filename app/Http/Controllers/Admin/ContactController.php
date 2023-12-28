<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;

class ContactController extends Controller
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(): View
    {
        $contacts = Contact::where('id', 1)->first();

        return view('dashboard.contacts-edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'title_short' => 'required|min:3|max:100',
            'address_ru' => 'required|min:4|max:255',
            'address_en' => 'required|min:4|max:255',
            'address_tr' => 'required|min:4|max:255',
            'phone' => 'required|min:4|max:20',
            'email' => 'required|min:4|max:100',
            'time' => 'required|min:4|max:20',
        ]);

        $contacts = Contact::find(1);

        $contacts->update([
            'title' => $validated["title"],
            'title_short' => $validated["title_short"],
            'address_ru' => $validated["address_ru"],
            'address_en' => $validated["address_en"],
            'address_tr' => $validated["address_tr"],
            'phone' => $validated["phone"],
            'email' => $validated["email"],
            'time' => $validated["time"],
        ]);

        return redirect('/dashboard/contacts/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
