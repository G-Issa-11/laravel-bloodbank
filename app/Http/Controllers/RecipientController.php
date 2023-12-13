<?php

namespace App\Http\Controllers;

use App\Recipient;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function index() {

        $recipients = Recipient::all();
        return view('recipients', compact('recipients'));

    }

    public function store(Request $request) {
        $request->validate([
            'recipient_ID' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'bloodgroup_id' => 'required',
            'date_of_birth' => 'required',
        ]);
    
        Recipient::create($request->all());
    
        return redirect('/recipient-records')->with('success', 'Recipient added successfully!');
    }
    

    public function deleteRecipient(Recipient $recipient) {
        $recipient->delete();
        return redirect('/recipient-records');
    }
    
    public function clearTable(){
        Recipient::truncate();
        return redirect('/recipient-records');
}
}
