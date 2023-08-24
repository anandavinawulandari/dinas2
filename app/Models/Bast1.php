<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bast1 extends Model
{
    use HasFactory;

    protected $table = 'Bast1';
    protected $primaryKey = 'kode_bast1';
    protected $fillable = ['kode_bast1', 'status', 'no_agenda', 'no_surat', 'tgl_surat', 'perihal', 'kepada', 'sumber', 'kode_bidang', 'catatan'];

    public function bidang(){
    	return $this->belongsTo(Bidang::class, 'kode_bidang');
    }

    public function bast1(){
        return $this->hasMany(Bast1::class);
    }
    
}
