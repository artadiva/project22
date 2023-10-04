<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKeluhan extends Model
{
    use HasFactory;
    protected $table = 'master_keluhans';
    protected $guarded=[];
}
