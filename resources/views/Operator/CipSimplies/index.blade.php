<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cheklist CIP Simply</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('navbar')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h3> Cheklist Cip </h3>
                        <a href="{{ route('Operator.CipSimplies.create') }}" class="btn btn-md btn-success mb-3 float-right">
                            Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Shift</th>
                                        <th scope="col" class="text-center">Tanggal</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cipSimplies as $asSimply)
                                    <tr>
                                        <td class="text-center">{{$asSimply->shift}}</td>
                                        <td class="text-center">{{$asSimply->tanggal}}</td>
                                        <td class="text-center">
                                            @if($asSimply->status == 1)
                                                Sudah Approve
                                            @else
                                                Belum Approve
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('Operator.CipSimplies.destroy', $asSimply->id) }}" method="POST">
                                                <a href="{{ route('Operator.CipSimplies.edit', $asSimply->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center text-muted" colspan="57">Data Tools tidak tersedia</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>
