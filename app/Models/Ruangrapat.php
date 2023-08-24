<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangrapat extends Model
{
    use HasFactory;

    protected $table = 'ruangrapat';
    protected $primaryKey = 'kode_rrapat';
    protected $fillable = ['kode_rrapat','status', 'nama_ruang', 'tgl_acara', 'jam', 'acara','kode_bidang', 'tgl_pesan', 'catatan'];

    public function bidang(){
    	return $this->belongsTo(Bidang::class, 'kode_bidang');
    }

    public function ruangrapat(){
        return $this->hasMany(Ruangrapat::class);
    }
    
}
