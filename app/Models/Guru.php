<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\GuruMapel;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
    ];

    public function guruMapel()
    {
        return $this->hasMany(GuruMapel::class, 'guru_id');
    }
}
