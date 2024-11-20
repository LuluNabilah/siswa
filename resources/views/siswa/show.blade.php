@extends('layouts.master')

@section('content')<body>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-mb-12">
                        <div class="panel-heading">
                                <div class="py=4">
                                    <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Data Siswa</h3>

                                    <a href="{{ route('siswa.index') }}"class="btn btn=sm btn-secondary mb-2">Kembali</a>

                                    <table class="table table-strired table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <td><strong>#{{ $siswa->id }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Depan</td>
                                            <td>{{ $siswa->nama_depan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Belakang</td>
                                            <td>{{ $siswa->nama_belakang}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $siswa->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                @if($siswa->jenis_kelamin =="L")
                                                    <span>Laki-laki</span>
                                                @else
                                                    <span>Perempuan</span>
                                                @endif
                                            </td>
                                            <tr>
                                                <td>Agama</td>
                                                <td>{{ $siswa->agama}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{ $siswa->alamat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>{{ \Carbon\Carbon::parse($siswa->from_date)->isoFormat('DD MMMM Y HH:mm')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Update At</td>
                                                <td>{{ \Carbon\Carbon::parse($siswa->from_date)->isoFormat('DD MMMM Y HH:mm')}}</td>
                                            </tr>
                                            
                                        </tr>
                                    </table>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection