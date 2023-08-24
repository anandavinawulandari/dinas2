<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notadinas extends Model
{
    use HasFactory;

    protected $table = 'notadinas';
    protected $primaryKey = 'kode_nota';
    protected $fillable = ['status','kode_smasuk', 'no_agenda', 'no_surat', 'tgl_surat', 'perihal', 'kepada', 'catatan','kode_bidang'];

    public function bidang(){
    	return $this->belongsTo(Bidang::class, 'kode_bidang');
    }
    public function notadinas(){
        return $this->hasMany(Notadinas::class);
    }
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }

    public function suratmasuk(){
    	return $this->belongsTo(Suratmasuk::class, 'kode_smasuk');
    }
}
