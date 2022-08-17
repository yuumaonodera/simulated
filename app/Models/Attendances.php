<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'start_time', 'end_time'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}