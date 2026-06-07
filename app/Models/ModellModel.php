<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModellModel extends Model
{
    protected $table = 'modell';
    public $timestamps = false;
    protected $fillable = ['nev', 'evjarat', 'markaID', 'hajtasID', 'uzemanyagID'];

    public function marka()
    {
        return $this->belongsTo(MarkaModel::class, 'markaID');
    }

    public function hajtas()
    {
        return $this->belongsTo(HajtasModel::class, 'hajtasID');
    }

    public function uzemanyag()
    {
        return $this->belongsTo(UzemanyagModel::class, 'uzemanyagID');
    }
}
