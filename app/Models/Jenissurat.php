<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenissurat extends Model
{
    use HasFactory;

    protected $table = 'jenissurat';
    protected $primaryKey = 'no_surat';
    protected $fillable = ['no_surat', 'jenis_surat', 'sifat', 'file_surat'];


    public function jenissurat(){
        return $this->belongsTo(Jenissurat::class, 'no_surat');
    }
}
