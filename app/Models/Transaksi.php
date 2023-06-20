<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'tglbeli',
        'nama_pembeli',
        'created_at',
        'updated_at'
    ];

    public function transaksi()
    {
        return $this->hasMany(Obat::class);
    }


}