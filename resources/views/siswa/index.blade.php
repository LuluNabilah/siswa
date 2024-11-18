
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
        
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
                                <a href="/siswa/{id}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/siswa/{id}" method="POST" onsubmit="return confirm('Are you sure you want to delete this siswa?');">
                                    @csrf
                                    @method('DELETE') <!-- Specify that this is a DELETE request -->
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <form action="" id="form-delete" method="POST">
        @csrf
        @method('DELETE')
     </form>
</body>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
    function handleDestroy(url) {
        swal({
            title: "Apakah anda yakin?",
            text: "Setelah dihapus, Anda tidak dapat mengembalikannya!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((confirmed) => {
            if (confirmed) {
                $("#form-delete").attr('action', url);
                $("#form-delete").submit();
            }
        });
    }
</script>

