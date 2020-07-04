<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 't_menus';
    protected $fillable = ['id','kode_jenis','nama','harga','status'];
}
