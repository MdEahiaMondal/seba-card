<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view('backend.contacts.create');
    }


    public function store(ContactRequest $request)
    {

        $request['slug'] = Str::slug($request->our_address);
        $request['status'] = $request->status ?? 0;

        $only_go = $request->only(['our_address', 'slug', 'phone', 'fax', 'email', 'web', 'status']);

        Contact::create($only_go);

        return redirect()->back()->with('successMsg', 'কনট্যাক্ট  সফলভাবে তৈরি করা হয়েছে');

    }


    public function edit(Contact $contact)
    {
        return view('backend.contacts.edit', compact('contact'));
    }


    public function update(ContactRequest $request, Contact $contact)
    {

        $request['slug'] = Str::slug($request->our_address);
        $request['status'] = $request->status ?? 0;

        $only_go = $request->only(['our_address', 'slug', 'phone', 'fax', 'email', 'web', 'status']);

        $contact->update($only_go);

        return redirect()->route('contacts.index')->with('successMsg', 'কনট্যাক্ট  সফলভাবে কিছুটা রূপান্তর করা হয়েছে');

    }


    public function destroy(Contact $contact)
    {

        $contact->delete();
        return redirect()->back()->with('successMsg', 'কনট্যাক্ট সফলভাবে মুছে ফেলা হয়েছে');
    }

    public function changeStatus(Contact $contact){

        $contact->status = !$contact->status;
        $contact->save();
        return redirect()->back()->with('successMsg', 'কনট্যাক্ট প্রকাশনার অবস্থা সফলভাবে পরিবর্তন হয়েছে');
    }

}
