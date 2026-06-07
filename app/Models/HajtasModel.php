<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HajtasModel extends Model
{
    protected $table = 'hajtas';
    public $timestamps = false;
    protected $fillable = ['nev'];
}
