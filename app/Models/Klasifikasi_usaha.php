<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi_usaha extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi_usahas';
    protected $fillable = ['name'];
}
