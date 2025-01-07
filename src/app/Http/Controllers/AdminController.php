<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $contacts = Contact::with('category')->orderByDesc('id')->paginate(7);
        return view('admin',compact('contacts'));
    }
    public function destroy(Request $request){
        Contact::find($request->id)->delete();
        return redirect('admin')->with('success','データを削除しました');
    }
}
