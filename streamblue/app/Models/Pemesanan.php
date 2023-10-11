<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pesan',
        'user_id',
        'langganan_id'
    ];

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function langganan()
    {
        return $this->hasOne(Langganan::class);
    }
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
