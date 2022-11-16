<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = $request->user()->contacts()->get();

        return view('contacts.index', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contact = $request->user()->newContact();

        return view('contacts.create', [
            'contact' => $contact,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = $request->user()->newContact();

        // try to save contact
        $errors = $contact->updateFromRequest($request);

        // if has error
        if (!$errors->isEmpty()) {
            return response()->view('contacts.create', [
                'contact' => $contact,
                'errors' => $errors,
            ], 400);
        }

        return redirect()->action('App\Http\Controllers\ContactController@index')
            ->with('success', 'Contact was successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        // try to save contact
        $errors = $contact->updateFromRequest($request);

        // if has error
        if (!$errors->isEmpty()) {
            return response()->view('contacts.edit', [
                'contact' => $contact,
                'errors' => $errors,
            ], 400);
        }

        return redirect()->action('App\Http\Controllers\ContactController@index')
            ->with('success', 'Contact was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        
        $contact->delete();

        return redirect()->action('App\Http\Controllers\ContactController@index')
            ->with('success', 'Contact was successfully deleted!');
    }
}
