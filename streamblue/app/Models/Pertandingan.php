<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pertandingan',
        'nama_pertandingan',
        'liga',
        'langganan_id'
    ];

    protected $guarded = ['id'];

    public function langganan()
    {
        return $this->belongsTo(Langganan::class);
    }
    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }
}
