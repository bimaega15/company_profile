<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
