<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPortfolio extends Model
{
    use HasFactory;
    protected $table = 'kategori_portfolio';
    protected $guarded = [];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
