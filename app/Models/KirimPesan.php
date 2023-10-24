<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class KirimPesan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kirim_pesan';

    public function roleId()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
