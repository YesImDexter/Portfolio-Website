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

        if (Contact::create($request->post())) {
            return response()->json(['status' => true], 200);
        } else {
            return response()->json(['status' => false], 200);
        }
    }
}
