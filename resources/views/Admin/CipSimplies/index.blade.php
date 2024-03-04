<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cheklist Cip Simply</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <style>
        /* Menambahkan warna ke tabel dan baris */
        body {
            background: #1396ca;
    }
    </style> --}}
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
                <form action="{{ route('export.by_datecip') }}" method="GET">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="start_date" class="form-label text-white">Periode Dari</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="col-md-4">
                            <label for="end_date" class="form-label text-white">Periode Sampai</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="col-md-4 align-self-end">
                            <button type="submit" class="btn btn-primary">Export</button>
                        </div>
                    </div>
                </form>
                
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h3> Cheklist Cip </h3>
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
                                            <a href="{{ route('Admin.CipSimplies.edit', $asSimply->id) }}"
                                                class="btn btn-sm btn-success">APPROVE</a>
                                                
                                            <a href="{{ route('exportcip', ['id' => $asSimply->id]) }}"
                                                class="btn btn-sm btn-primary">DOWNLOAD</a>
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
