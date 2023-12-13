<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::all();
        return view('donors', compact('donors'));
    }


    public function store(Request $request)
    {
        $incomingFields = $request->validate([
                'personal_id' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'gender' => 'required',
                'email' => 'required',
                'address' => 'required',
                'bloodgroup_id' => 'required',
                'last_donation_date' => 'required',
            ]);
    
            Donor::create($request->all());
    
            return redirect('/donor-records')->with('success', 'Donor added successfully!');
    }

    public function deleteDonor(Donor $donor) {
        $donor->delete();
        return redirect('/donor-records');
    }

    public function showEditScreen(Donor $donor) {
        return view('edit-donor', ['donor' => $donor]);
    }

    public function actuallyUpdateDonorInfo(Donor $donor, Request $request) {
        $incomingfields = $request->validate([
            'address' => 'required',  // Corrected field name to 'address'
            'email' => 'required',
            'last_donation_date' => 'required',
        ]);        
    
        $incomingfields = array_map('strip_tags', $incomingfields);  // Corrected variable name
    
        $donor->update($incomingfields);
        return redirect('/donor-records');
    }
    

}
