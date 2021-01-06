<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $guarded = ['id'];
    use HasFactory;

    public function profiles_id()
    {
    	return $this->hasOne(Profile_of_user::class);
    }
}
