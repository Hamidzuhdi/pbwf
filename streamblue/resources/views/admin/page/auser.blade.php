@extends('admin.layout.index')
@section('content')
<h2>Data User</h2>
<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding-right: 50px;">ID</th>
            <th style="padding-right: 50px;">nama</th>
            <th style="padding-right: 50px;">email</th>
            <th style="padding-right: 50px;">role</th>
            <th style="padding-right: 50px;">telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td style="padding-right: 50px;">{{ $user->id }}</td>
                <td style="padding-right: 50px;">{{ $user->nama }}</td>
                <td style="padding-right: 50px;">{{ $user->mail }}</td>
                <td style="padding-right: 50px;">{{ $user->role }}</td>
                <td style="padding-right: 50px;">{{ $user->telp }}</td>
                <td>
                    <a href="/admin/modal/edituser/{{ $user->id }}/edit">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
