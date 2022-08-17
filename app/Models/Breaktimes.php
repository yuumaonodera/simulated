<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaktimes extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'attendaces_id', 'start_time', 'end_time'];
}
