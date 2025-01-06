<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $contacts = Contact::with('category')->get()->sortByDesc('id');
        return view('admin',compact('contacts'));
    }
}
