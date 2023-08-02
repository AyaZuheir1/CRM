<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all()->where('id',Auth::id());
        return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable|string',
            'address' =>'nullable|string',
            'job'=>'nullable|string',
            'note'=>'nullable|string',
            'city_state' =>'nullable|string',
            
        ]);
    
        $contact = Contact::create($data);
    
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:contacts,email,' . $contact->id,
        'phone' => 'nullable|string',
        'address' =>'nullable|string',
        'job'=>'nullable|string',
        'note'=>'nullable|string',
        'city_state' =>'nullable|string',
    ]);

    $contact->update($data);

    return redirect()->route('contacts.index')->with('success', 'Update completed successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
{
    $contact->delete();

    return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
}
 }









