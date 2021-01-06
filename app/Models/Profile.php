<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function modules_id()
    {
    	return $this->hasMany(Profile_of_module::class);
    }
}
