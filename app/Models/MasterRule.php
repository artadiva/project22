<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterRule extends Model
{
    use HasFactory;
    protected $table = 'rule';
    protected $primaryKey = 'id_rule';
    protected $guarded=[];

    public function masterDiet()
    {
        return $this->belongsTo(MasterDiet::class, 'diet');
    }
    public function masterDiagnosa()
    {
        return $this->belongsTo(masterDiagnosa::class, 'kode_diagnosa');
    }
    public function calculateCF($belief, $plausibility) {
        if ($belief + $plausibility > 0) {
            return $belief / ($belief + $plausibility);
        } else {
            return 0; // Atur sesuai kebutuhan jika penyebut nol
        }
    }
}
