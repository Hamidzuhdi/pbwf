<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'harga',
        'durasi',
        'extends'
    ];

    protected $guarded = ['id'];

    public function pertandingan()
    {
        return $this->hasOne(Pertandingan::class);
    }

    public function pemesanan()
    {
        return $this->hasOne(Pemesanan::class);
    }
}
