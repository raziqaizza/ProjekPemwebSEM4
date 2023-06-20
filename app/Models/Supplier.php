<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_supplier',
        'alamat',
        'kota',
        'nomor_telepon'
    ];

    public function obat()
    {
        return $this->hasMany(Obat::class);
    }


}