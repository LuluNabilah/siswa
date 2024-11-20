@extends('layouts.master')
@section('content')

<body>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-mb-12">
                        <div class="panel-heading">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <h3 class="fw-bold mb-2 pb-2 border-bottom">Data Siswa</h3>
                            </div>
                            <div class="row-6">
                            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a><br>
                            
                           
                                <table class="table table-bordered"><br>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Depan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>Agama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @if($siswa->isEmpty())
                                        <div class="alert alert-warning">Tidak ada data siswa.</div>
                                    @else
                                    <tbody>
                                        @if(count($siswa)==0)
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data</td>
                                            </tr>
                                        @else
                                        @foreach ($siswa as $s)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td><a href="/siswa/{{ $s->id }}/profile/">{{ $s->nama_depan }}</td></a>
                                                <td>{{ $s->jenis_kelamin }}</td>
                                                <td>{{ $s->email }}</td>
                                                <td>{{ $s->agama }}</td>
                                                <td>
                                                    <a href="{{ route('siswa.show', $s->id) }}"class="btn btn-sm btn-primary">Detail</a>
                                                    <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    
                                                    <a href="{{ route('siswa.destroy', $s->id) }}" class="btn btn-danger btn-sm" 
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        Hapus
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection


