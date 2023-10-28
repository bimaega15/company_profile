<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterData extends Model
{
    use HasFactory;
    protected $table = 'counter_data';
    protected $guarded = [];
}
