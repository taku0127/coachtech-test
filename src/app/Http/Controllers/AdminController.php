<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $contacts = Contact::with('category')->orderByDesc('id')->paginate(7);
        $categories = Category::all();
        return view('admin',compact('contacts','categories'));
    }
    public function destroy(Request $request){
        Contact::find($request->id)->delete();
        return redirect('admin')->with('success','データを削除しました');
    }

    public function search(Request $request){
        $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->date)->orderByDesc('id')->paginate(7);
        $categories = Category::all();
        return view('admin' , compact('contacts','categories'));
    }
}
