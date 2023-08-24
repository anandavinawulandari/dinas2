<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    use HasFactory;

    protected $table = 'Suratkeluar';
    protected $primaryKey = 'kode_skeluar';
    protected $fillable = ['kode_skeluar','status','no_agenda','no_surat','tgl_surat','perihal','kepada', 'sumber', 'kode_bidang', 'catatan'];

    public function bidang(){
    	return $this->belongsTo(Bidang::class, 'kode_bidang');
    }
    public function suratkeluar(){
        return $this->hasMany(Suratkeluar::class);
    }

    public function surattugas(){
    	return $this->belongsTo(Surattugas::class, 'kode_stugas');
    }
}
