<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = ['no_surat','kategori_id','judul','waktu','file_surat'];

    public function kategori(){
    	return $this->belongsTo('App\Models\Kategori');
    }
}
