<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = 't_pelanggans';
    protected $fillable = ['nama','kode_jenis','nama','harga','status'];

    
}
