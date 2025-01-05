<?php

namespace App\Http\Controllers;

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

    public function confirm(Request $request){
        $contact = $request->only(['last_name','first_name','gender','email','tel1','tel2','tel3','address','building','category_id','detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact','category'));
    }
}
