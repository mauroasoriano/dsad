<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_of_user extends Model
{
    use HasFactory;

    public function profile()
    {
    	return $this->belongsTo(Profile::class, 'profile_id');
    }
}
