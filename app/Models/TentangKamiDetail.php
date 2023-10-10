<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKamiDetail extends Model
{
    use HasFactory;
    protected $table = 'tentang_kami_detail';
    protected $guarded = [];

    public function tentangKami()
    {
        return $this->belongsTo(TentangKami::class);
    }
}
