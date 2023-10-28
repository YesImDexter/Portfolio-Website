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

        $validate = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string']
        ]);

        if ($validate) {
            Contact::create($request->post());
            return response()->json(['status' => true, 'request' => $validate]);
        } else {
            return response()->json(['status' => false, 'error' => 'Unknown Error']);
        }
    }
}
