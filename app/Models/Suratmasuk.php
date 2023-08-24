<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;

    protected $table = 'suratmasuk';
    protected $primaryKey = 'kode_smasuk';
    protected $fillable = ['kode_smasuk', 'baca', 'jenis_surat',  'dari', 'kode_nota',  'tgl_surat'];


    public function suratmasuk(){
        return $this->hasMany(Suratmasuk::class);
    }
    public function notadinas(){
    	return $this->belongsTo(Notadinas::class, 'kode_nota');
    }

}
