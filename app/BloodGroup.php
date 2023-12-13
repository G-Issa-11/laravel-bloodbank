<?php

namespace App;

use App\Recipient;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    protected $table = 'bloodgroups';
    public function recipients()
    {
        return $this->hasMany(Recipient::class, 'bloodgroup_id', 'id');
    }

    public function donors()
    {
        return $this->hasMany(Donor::class, 'bloodgroup_id', 'id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'bloodgroup_id', 'id');
    }
}
