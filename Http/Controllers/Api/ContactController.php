<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

namespace Modules\Contacts\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contacts\Entities\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the contacts resource.
     * @return Renderable
     */
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return response()->json([
            'data' => $contacts,
        ], 200);
    }

    /**
     * Show the specified contact resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $contact = Contact::where('id', $id)->first();
        return response()->json([
            'data' => $contact,
        ], 200);
    }
}
