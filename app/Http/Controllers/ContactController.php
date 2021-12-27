<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    ///問い合わせ確認
    public function index()
    {
    }

    //問い合わせ受信
    public function create(Request $request, Contact $contact)
    {
        $data = $request->only(['name','email','type','detail']);
        $validator = Validator::make($data,[
            'name'      => ['required','string','max:50'],
            'email'     => ['required','email'],
            'type'      => ['required',Rule::in(['quotation','order','others'])],
            'detail'    => ['string','max:1000','nullable'],
        ]);
        $validator->validate();
        $contact->storeContact($data);
        return redirect('/')->with('message','お問い合わせありがとうございます。');
    }

    //問い合わせ対応済み
    public function reply()
    {
    }
}
