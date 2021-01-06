<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_of_module extends Model
{
    use HasFactory;

    public function modules()
    {
    	return $this->belongsTo(Module::class, 'module_id');
    }
}
