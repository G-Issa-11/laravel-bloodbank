<?php

namespace App\Http\Controllers;

use App\Donation;
use App\BloodGroup;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index() {
        $donations = Donation::all();
        return view('donations', compact('donations'));
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class, 'bloodgroup_id', 'id');
    }

    public function staffMember()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'staff_id');
    }

    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id', 'personal_id');
    }

    public function clearTable(){
        Donation::truncate();
        return redirect('/donation-records');
}
}
