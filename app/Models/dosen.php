<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table ='dosen';
    protected $fillable = [
        'nip',
        'nama',
        'matkul',
        'alamat',
        
    ];
    public function matkul()
    {
        return $this->belongsTo(\App\Models\matkul::class);
    }
}
