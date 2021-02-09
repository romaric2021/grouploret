<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\Models;
use App\Models\Contact;
use App\Models\Newsletter;

class ContnewsController extends Controller
{
    //

    public function storenews (Request $request) {

        // Form validation
        $this->validate($request, [
            'email' => 'required|email',
         ]);
        //  Store data in database
        Newsletter::create($request->all());
        session()->flash('message', 'Mail enrégistré vous recévérai les news via mail 📧');
	    return redirect()->back();
       }






       public function storecontact (Request $request) {

        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
            'message' => 'required',
         ]);
        //  Store data in database
        Contact::create($request->all());
        session()->flash('Merci', 'votre message à été envoyé nous contacterons dans quelque instant');
	    return redirect()->back();
       }
}
