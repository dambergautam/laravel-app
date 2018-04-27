<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'dob', 'economy', 'gender'
    ];

    public function userAccount()
    {
        return $this->belongsTo('App\UserAuthentication');
    }
}
