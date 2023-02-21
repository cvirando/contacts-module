<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

namespace Modules\Contacts\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contacts\Entities\Contact;
use Illuminate\Support\Str;
use Storage;
use Image;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $contacts = Contact::orderby('id', 'desc')->get();
        return view('contacts::index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('contacts::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // 'last_working_date',
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->dob = $request->input('dob');
        $contact->phone_number = $request->input('phone_number');
        $contact->address = $request->input('address');
        $contact->insurance_number = $request->input('insurance_number');
        $contact->hire_date = $request->input('hire_date');
        $contact->kids = $request->input('kids');
        $contact->marital_status = $request->input('marital_status');
        $contact->gender = $request->input('gender');
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = 'contact-' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            $pathToThumbImage = public_path('images/thumb/'. $filename);
            $pathToBigImage = public_path('images/big/'. $filename);
            Image::make($image)->resize(1200, 672)->save($location); // for social media
            Image::make($image)->resize(250, 250)->save($pathToThumbImage);
            Image::make($image)->save($pathToBigImage);
            $contact->photo = $filename;
        }
        $contact->save();
        return view('contacts::index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('contacts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('contacts::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->dob = $request->input('dob');
        $contact->phone_number = $request->input('phone_number');
        $contact->address = $request->input('address');
        $contact->insurance_number = $request->input('insurance_number');
        $contact->hire_date = $request->input('hire_date');
        $contact->kids = $request->input('kids');
        $contact->marital_status = $request->input('marital_status');
        $contact->gender = $request->input('gender');
        $contact->last_working_date = $request->input('last_working_date');
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = 'contact-' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            $pathToThumbImage = public_path('images/thumb/'. $filename);
            $pathToBigImage = public_path('images/big/'. $filename);
            Image::make($image)->resize(1200, 672)->save($location); // for social media
            Image::make($image)->resize(250, 250)->save($pathToThumbImage);
            Image::make($image)->save($pathToBigImage);
            $oldFilename = $contact->photo;
            $contact->photo = $filename;
            if(!empty($contact->photo)){
                Storage::delete($oldFilename);
            }
        }
        $contact->save();
        return view('contacts::index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return view('constants::index');
    }
}
