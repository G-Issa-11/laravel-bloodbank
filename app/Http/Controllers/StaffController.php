<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $staffMembers = Staff::all();
        return view('staffs', compact('staffMembers'));
    }

    public function store(Request $request) {
        $request->validate([
            'staff_id' =>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'email'=>'required', 
            'contact_number'=>'required', 
            'address'=>'required', 
            'employment_date'=>'required', 
            'position'=>'required',
        ]);
    
        Staff::create($request->all());
    
        return redirect('/staff-records')->with('success', 'Recipient added successfully!');
    }

    public function deleteStaffMember(Staff $staff) {
        $staff->delete();
        return redirect('/staff-records');
    }

    public function clearTable() {
        Staff::truncate();
        return redirect('/staff-records');
    }
}
