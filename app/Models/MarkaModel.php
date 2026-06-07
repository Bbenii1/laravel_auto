<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarkaModel extends Model
{
    protected $table = 'marka';
    public $timestamps = false;
    protected $fillable = ['nev', 'orszagID'];

    public function orszag()
    {
        return $this->belongsTo(OrszagModel::class, 'orszagID');
    }
}
