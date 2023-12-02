@extends('admin.layout.index')

@section('content')
<h2>Data pembayaran</h2>
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding-right: 30px;">ID</th>
            <th style="padding-right: 30px;">Total bayar</th>
            <th style="padding-right: 30px;">Pemesanan Id</th>
            <th style="padding-right: 30px;">Gambar</th>
            <th style="padding-right: 30px;">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pembayarans as $pembayaran)
            <tr>
                <td style="padding-right: 30px;">{{ $pembayaran->id }}</td>
                <td style="padding-right: 30px;">{{ $pembayaran->total_bayar }}</td>
                <td style="padding-right: 30px;">{{ $pembayaran->pemesanan_id }}</td>
                <td style="padding-right: 80px;">
                    <img src="{{ asset('storage/gambar/' . $pembayaran->gambar) }}" style="width: 100px; height: auto;" alt="gambar">
                </td>
                <td style="padding-right: 30px;">{{ $pembayaran->status }}</td>
                <td>
                    <a href="/admin/modal/editpembayaran/{{ $pembayaran->id }}/edit">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/admin/modal/addpembayaran" class="btn btn-sm btn-success" style="margin-top: 20px">Tambah pembayaran Baru</a>
@endsection
