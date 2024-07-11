<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
     public function index(){
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts','categories'));
    }

    public function confirm(ContactRequest $request){
        $categoryId = $request->input('category_id');
        $category = Category::find($categoryId);
        $contact = $request->all();
        $tel = $request->input('tel1').$request->input('tel2').$request->input('tel3');

        //性別を文字列で表示
        $genderDisplay = $this->getGenderDisplay($contact['gender']);

        return view('confirm', compact('category','contact', 'tel', 'genderDisplay'));
    }

    private function getGenderDisplay($gender){
        switch($gender){
            case '1':
                return '男性';
            case '2':
                return '女性';
            case '3':
                return 'その他';
        }
    }

    public function store(Request $request){
        $contact = $request->all();
        Contact::create($contact);
        return view('thanks');
    }
}
