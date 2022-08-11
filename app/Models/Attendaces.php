<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendaces extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'start_time', 'end_time', 'date'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
