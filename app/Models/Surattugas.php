<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surattugas extends Model
{
    use HasFactory;

    protected $table = 'Surattugas';
    protected $primaryKey = 'kode_stugas';
    protected $fillable = ['kode_stugas','kode_bidang','status', 'no_agenda', 'no_surat', 'tgl_surat', 'perihal', 'kepada', 'sumber', 'catatan'];

    public function bidang(){
    	return $this->belongsTo(Bidang::class, 'kode_bidang');
    }

    public function surattugas(){
        return $this->hasMany(Surattugas::class);
    }
    
    public function jenissurat(){
    	return $this->belongsTo(Jenissurat::class, 'no_surat');
    }
    


}
