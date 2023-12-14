<?php

namespace App\Http\Controllers;

use App\BloodGroup;
use Illuminate\Http\Request;

class BloodGroupController extends Controller
{
    public function index() {
        $bloodgroups = BloodGroup::all();
        return view('bloodgroups', compact('bloodgroups'));
    }
}
