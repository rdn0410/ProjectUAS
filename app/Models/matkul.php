<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    use HasFactory;
    protected $table = 'matkuls';
    public function dosen()
    {
        return $this->hasMany(\App\Models\dosen::class);
    }
}
