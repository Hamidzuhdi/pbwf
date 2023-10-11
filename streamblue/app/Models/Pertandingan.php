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
        'user_id',
        'langganan_id'
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function langganan()
    {
        return $this->belongsTo(Langganan::class);
    }
    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }
}
