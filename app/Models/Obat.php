<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_obat',
        'kode_obat',
        'produsen',
        'supplier_id',
        'stok',
        'harga'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}