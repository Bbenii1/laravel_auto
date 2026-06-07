<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UzemanyagModel extends Model
{
    protected $table = 'uzemanyag';
    public $timestamps = false;
    protected $fillable = ['nev'];
}
