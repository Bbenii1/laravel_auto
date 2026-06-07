<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrszagModel extends Model
{
    protected $table = 'orszag';
    public $timestamps = false;
    protected $fillable = ['nev', 'rovid_nev'];
}
