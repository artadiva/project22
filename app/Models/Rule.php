<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $table = 'rule';
    protected $guarded = [];

    public function diet()
    {
        return $this->belongsTo(MasterDiet::class,'diet');
    }
}
