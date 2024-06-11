<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    use HasFactory;
    protected $table = 'total';
    protected $primaryKey = 'id_total';
    public $incrementing = true;
    protected $fillable = ['nama', 'jabatan', 'jenis_kompensasi','biaya_kompensasi','total_kompensasi'];
    public $timestamps = false;

}
