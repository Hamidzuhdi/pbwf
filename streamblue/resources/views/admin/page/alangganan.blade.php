@extends('admin.layout.index')

@section('content')
<h2>Data Langganan</h2>
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding-right: 80px;">ID</th>
            <th style="padding-right: 80px;">keterangan</th>
            <th style="padding-right: 80px;">gambar</th>
            <th style="padding-right: 80px;">harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($langganans as $langganan)
            <tr>
                <td style="padding-right: 80px;">{{ $langganan->id }}</td>
                <td style="padding-right: 80px;">{{ $langganan->ket }}</td>
                <td style="padding-right: 80px;">
                    <img src="{{ asset('gambar/' . $langganan->gambar) }}" style="width: 100px; height: auto;" alt="Langganan Image">
                </td>
                <td style="padding-right: 80px;">{{ $langganan->harga }}</td>
                <td>
                    <a href="/admin/modal/editlangganan/{{ $langganan->id }}/edit">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/admin/modal/addlangganan" class="btn btn-sm btn-success" style="margin-top: 20px">Tambah langganan Baru</a>
@endsection
