<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKunjungan extends Model
{
    use HasFactory;
    protected $table = 'data_kunjungans';
    protected $guarded=[];

    public function pasien()
    {
        return $this->belongsTo(DataPasien::class,'id_pasien','id');
    }
    public function getSuspectIdsAttribute()
    {
        return explode(',', $this->suspect);
    }
    public function suspects()
    {
        
        return $this->belongsTo(MasterSuspect::class, 'suspect_ids');
    }
}