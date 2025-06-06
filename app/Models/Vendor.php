<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendor';
    protected $fillable = ['nama', 'kontak', 'alamat'];

    public function pengadaans()
    {
        return $this->hasMany(Pengadaan::class);
    }
}