<?php

namespace App;

use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    protected $fillable = ['staff_id', 'first_name', 'last_name', 'gender', 'email', 
'contact_number', 'address', 'employment_date', 'position'];

public function donations()
    {
        return $this->hasMany(Donation::class, 'bloodgroup_id', 'id');
    }
}
