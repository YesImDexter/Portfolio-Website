<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string']
        ]);

        Contact::create($request->post());
        return redirect()->route('main.index')->with('success', 'Company has been created successfully.');
    }
}
