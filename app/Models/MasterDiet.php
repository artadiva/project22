<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDiet extends Model
{
    use HasFactory;
    protected $table = 'master_diets';
    protected $guarded=[];
}
