<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AuthController extends Controller
{
    public function index(){
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function destroy(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }

    public function search(Request $request){
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->created_at)->paginate(7);
        $categories = Category::all();

        return view('/admin', compact('contacts', 'categories'));
    }
}
