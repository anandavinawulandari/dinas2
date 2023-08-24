<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'Bidang';
    protected $primaryKey = 'kode_bidang';
    protected $fillable = ['kode_bidang','nama_bidang' ];


  
    public function bidang(){
        return $this->belongsTo(Bidang::class, 'kode_bidang');
    }
}
