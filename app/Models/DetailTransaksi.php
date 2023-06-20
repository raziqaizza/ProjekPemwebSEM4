<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'transaksi_id',
        'kode_obat',
        'jumlah',
    ];

    public function transaksi()
    {
        return $this->hasMany(Obat::class);
    }


}