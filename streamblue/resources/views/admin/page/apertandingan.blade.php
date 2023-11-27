@extends('admin.layout.index')

@section('content')
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding-right: 30px;">ID</th>
            <th style="padding-right: 30px;">Tanggal Pertandingan</th>
            <th style="padding-right: 30px;">Nama Pertandingan</th>
            <th style="padding-right: 30px;">Liga</th>
            <th style="padding-right: 30px;">Langganan ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pertandingans as $pertandingan)
            <tr>
                <td style="padding-right: 30px;">{{ $pertandingan->id }}</td>
                <td style="padding-right: 30px;">{{ $pertandingan->tgl_pertandingan }}</td>
                <td style="padding-right: 30px;">{{ $pertandingan->nama_pertandingan }}</td>
                <td style="padding-right: 30px;">{{ $pertandingan->liga }}</td>
                <td style="padding-right: 30px;">{{ $pertandingan->langganan_id }}</td>
                <td>
                    <a href="/admin/modal/editpertandingan/{{ $pertandingan->id }}/edit">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/admin/modal/addpertandingan" class="btn btn-sm btn-success" style="margin-top: 20px">Tambah Satuan Baru</a>
@endsection
