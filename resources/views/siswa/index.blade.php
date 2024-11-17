@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Siswa</h1>
        <a href="#" class="btn btn-primary mb-3">Tambah Siswa</a>
        
        @if($siswa->isEmpty())
            <div class="alert alert-warning">Tidak ada data siswa.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $s)
                        <tr>
                            <td><a href="/siswa/{{ $s->id }}/profile/"></a></a>{{ $s->nama_depan }}</td>
                            <td><a href="/siswa/{{ $s->id }}/profile/"></a></a>{{ $s->nama_belakang }}</td>
                            <td>{{ $s->jenis_kelamin }}</td>
                            <td>{{ $s->agama }}</td>
                            <td>
                                <a href="/edit{id}/siswa" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
@endsection