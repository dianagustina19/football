<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    protected $table = "pertandingan";

    public function tim()
    {
    	return $this->belongsTo('App\Models\Tim','tuan_rumah');
    }

    public function tim2()
    {
    	return $this->belongsTo('App\Models\Tim','tamu');
    }
}
