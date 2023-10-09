<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategoriPortfolio()
    {
        return $this->belongsTo(KategoriPortfolio::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
