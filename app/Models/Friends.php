<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $guarded =['mana'];

    public function groups()
    {
        return $this->belongsTo(Groups::class);
    }
}
