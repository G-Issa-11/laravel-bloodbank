<?php

namespace App;

use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donors';
    // protected $primaryKey = 'personal_id';
    protected $fillable = ['personal_id', 'first_name', 'last_name', 'gender', 'email', 
'address', 'bloodgroup_id', 'last_donation_date'];

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class, 'bloodgroup_id', 'id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'bloodgroup_id', 'id');
    }
}

