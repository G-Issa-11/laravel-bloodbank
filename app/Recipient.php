<?php

namespace App;

use App\BloodGroup;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $table = 'recipients';
    protected $fillable = [
        'recipient_ID',
        'first_name',
        'last_name',
        'gender',
        'email',
        'address',
        'contact_number',
        'bloodgroup_id',
        'date_of_birth',  
    ];


    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class, 'bloodgroup_id', 'id');
    }
}
