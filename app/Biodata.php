<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['nama', 'alamat', 'tgl_lahir', 'foto'];
    public $timestamps = true;
    
}
