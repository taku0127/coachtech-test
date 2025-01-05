<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['last_name','first_name','gender','email','tel1','tel2','tel3','address','building','category_id','detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact','category'));
    }

    public function store(Request $request){
        if($request->input('back') == 'back'){
            return redirect('/')->withInput();
        }
        $contact = $request->only(['last_name','first_name','gender','email','tel','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
