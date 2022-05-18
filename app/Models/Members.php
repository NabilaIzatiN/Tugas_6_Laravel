<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;


    protected $table = 'members';
    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
    public function friends()
    {
        return $this->belongsTo('App\Models\Friends');
    }
}
