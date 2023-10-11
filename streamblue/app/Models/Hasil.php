<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_hasil',
        'nama_hasil',
        'pertandingan_id'
    ];

    protected $guarded = ['id'];

    public function pertandingan()
    {
        return $this->belongsTo(Pertandingan::class);
    }
}
