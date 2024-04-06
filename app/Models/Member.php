<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $guarded = [];

    public function jenis_usaha(){
        return $this->belongsTo(Jenis_usaha::class, 'jenis_usaha_id');
    }

    public function klasifikasi_usaha(){
        return $this->belongsTo(Klasifikasi_usaha::class, 'klasifikasi_usaha_id');
    }
}
