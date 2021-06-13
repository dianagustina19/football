<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = "pemain_tim";

    public function tim()
    {
    	return $this->belongsTo('App\Models\Tim','tim');
    }
    
}

