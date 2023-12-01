@extends('admin.layout.index')

@section('content')
<h2>Data Pemesanan</h2>
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding-right: 30px;">ID</th>
            <th style="padding-right: 30px;">Total Harga</th>
            <th style="padding-right: 30px;">Durasi</th>
            <th style="padding-right: 30px;">User Id </th>
            <th style="padding-right: 30px;">Langganan ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pemesanan as $pemesanan)
            <tr>
                <td style="padding-right: 30px;">{{ $pemesanan->id }}</td>
                <td style="padding-right: 30px;">{{ $pemesanan->total_harga }}</td>
                <td style="padding-right: 30px;">{{ $pemesanan->durasi }}</td>
                <td style="padding-right: 30px;">{{ $pemesanan->user_id }}</td>
                <td style="padding-right: 30px;">{{ $pemesanan->langganan_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
