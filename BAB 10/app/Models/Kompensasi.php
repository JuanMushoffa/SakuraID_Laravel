<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompensasi extends Model
{
    use HasFactory;
    protected $table = 'kompensasi';
    protected $primaryKey = 'id_kompensasi';
    public $incrementing = true;
    protected $fillable = ['nama', 'jenis_kompensasi', 'biaya_kompensasi', 'total_kompensasi'];
    public $timestamps = false;

}
