<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_usaha extends Model
{
    use HasFactory;
    protected $table = 'jenis_usahas';
    protected $fillable = ['name'];

}
