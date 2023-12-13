<?php

namespace App;

use App\Donor;
use App\Staff;
use App\BloodGroup;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $fillable = ['donor_id', 'staff_id', 'bloodgroup_id', 'donation_date', 'units_donated'];

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class, 'bloodgroup_id', 'id');
    }

    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id', 'personal_id');
    }

    public function staffMember()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'staff_id');
    }
}
