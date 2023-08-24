<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapstugas extends Model
{
    use HasFactory;

    protected $table = 'Lapstugas';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name', 'description', 'file'];



    
    public function jenissurat(){
    	return $this->belongsTo(Jenissurat::class, 'no_surat');
    }
    public function surattugas(){
    	return $this->belongsTo(Surattugas::class, 'kode_stugas');
       
    }


}
