<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bast2 extends Model
{
    use HasFactory;

    protected $table = 'bast2';
    protected $primaryKey = 'kode_bast2';
    protected $fillable = ['kode_bast2', 'status', 'no_agenda', 'no_surat', 'tgl_surat', 'perihal', 'kepada', 'sumber', 'bidang', 'catatan'];


    public function bast2(){
        return $this->hasMany(Bast2::class);
    }
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
