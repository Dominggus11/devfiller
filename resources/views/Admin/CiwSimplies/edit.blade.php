<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Approve Ciw Simply</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-group.row {
            margin-bottom: 20px; /* Atur nilai sesuai kebutuhan Anda */
        }
        .error-input {
            background-color: #ffcccc; /* Warna latar belakang untuk input yang salah */
        }
        .good-input {
            background-color: #09e711; /* Warna latar belakang untuk input yang salah */
        }
    </style>
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
                <h3 class="text-center mb-4 text-white">Ubah Cheklist Ciw Simply</h3>
                <div>
                    <form action="{{ route('Admin.CiwSimplies.update', $ciwSimply->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    {{-- Alat --}}
                    <div>
                        {{-- Section 1 --}}
                        <div class="card border-0 shadow rounded mb-4">
                            <h4 class="text-left mt-4 mx-4">Cheklist Cleaning</h4>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm text-center">
                                        <label for="shift" class="font-weight-bold">Supervisor</label>
                                    </div>
                                    <div class="col-sm text-center">
                                        <label for="shift" class="font-weight-bold">Shift</label>
                                    </div>
                                    <div class="col-sm text-center">
                                        <label for="line" class="font-weight-bold">Line</label>
                                    </div>
                                    <div class="col-sm text-center">
                                        <label for="operator" class="font-weight-bold">Nama Operator</label>
                                    </div>
                                    <div class="col-sm text-center">
                                        <label for="tanggal" class="font-weight-bold">Tanggal</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm">
                                        <input type="text" class="form-control" name="supervisor" value="{{ old('supervisor', $ciwSimply->supervisor) }}" required placeholder="supervisor">
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" max="3" min="1" class="form-control" name="shift" value="{{ old('shift', $ciwSimply->shift) }}" readonly placeholder="Shift">
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" class="form-control" name="line" value="{{ old('line', $ciwSimply->line) }}" readonly placeholder="Line">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" class="form-control" name="operator" value="{{ old('operator', $ciwSimply->operator) }}" readonly placeholder="Nama Operator">
                                    </div>
                                    <div class="col-sm">
                                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal', $ciwSimply->tanggal) }}" readonly placeholder="Input tanggal">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Section</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Komponen</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Gambar</label>
                                    </div>
                                    <div class="col-3 text-center">
                                        <label for="area" class="font-weight-bold">Pelaksanaan</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="area" class="font-weight-bold">Status Mesin</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="status_mesin" class="font-weight-bold">Standar Waktu</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="waktu" class="font-weight-bold">Waktu</label>
                                    </div>
                                </div>
                                @for ($i = 1; $i <= 13; $i++)
                                <div class="form-group row">
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="section1{{ $i }}" value="{{ $ciwSimply->{'section1'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen1{{ $i }}" value="{{ $ciwSimply->{'komponen1'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2 text-center">
                                        @if($cips1 = \App\Models\SectionCiw1::find($i))
                                            <img src="{{ asset($cips1->gambar) }}" alt="Gambar" style="width: 100px">
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control " name="pelaksanaan1{{ $i }}"  readonly style="height: auto; overflow-y: hidden;">{{ $ciwSimply->{'pelaksanaan1'.$i} }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin1{{ $i }}" value="{{ $ciwSimply->{'status_mesin1'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu1{{ $i }}" value="{{ $ciwSimply->{'standar_waktu1'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu1{{ $i }}" value="{{ $ciwSimply->{'waktu1'.$i} }}" readonly>
                                    </div>
                                </div>
                                @endfor
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div> 
                            </div>
                        </div>
                        {{-- section 12 data --}}
                        <div class="card border-0 shadow rounded mb-4">
                            <h4 class="text-left mt-4 mx-4">Cheklist Inspeksi</h4>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-2 text-center">
                                        <label for="area text-center" class="font-weight-bold">Section</label>
                                    </div>
                                    <div class="col-2">
                                        <label for="area text-center" class="font-weight-bold">Komponen</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Gambar</label>
                                    </div>
                                    <div class="col-3 text-center">
                                        <label for="area" class="font-weight-bold">Pelaksanaan</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="area" class="font-weight-bold">Status Mesin</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="status_mesin" class="font-weight-bold">Standar Waktu</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="waktu" class="font-weight-bold">Waktu</label>
                                    </div>
                                </div>
                                @for ($i = 1; $i <= 8; $i++)
                                <div class="form-group row">
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="section2{{ $i }}" value="{{ $ciwSimply->{'section2'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen2{{ $i }}" value="{{ $ciwSimply->{'komponen2'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2 text-center">
                                        @if($cips1 = \App\Models\SectionCiw2::find($i))
                                            <img src="{{ asset($cips1->gambar) }}" alt="Gambar" style="width: 100px">
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control" name="pelaksanaan2{{ $i }}"  readonly style="height: auto; overflow-y: hidden;">{{ $ciwSimply->{'pelaksanaan2'.$i} }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin2{{ $i }}" value="{{ $ciwSimply->{'status_mesin2'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu2{{ $i }}" value="{{ $ciwSimply->{'standar_waktu2'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu2{{ $i }}" value="{{ $ciwSimply->{'waktu2'.$i} }}" readonly>
                                    </div>
                                </div>
                                @endfor
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>    
                            </div>
                        </div>
                        <div class="card border-0 shadow rounded mb-4">
                            <h4 class="text-left mt-4 mx-4">Cheklist Cleaning</h4>
                            <div class="card-body">
                                {{-- <div class="form-group row">
                                    <div class="col-sm">
                                        <input type="number" max="3" min="1" class="form-control" name="shift" value="{{ old('shift', $ciwSimply->shift) }}" readonly placeholder="Shift">
                                    </div>
                                    <div class="col-sm">
                                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal', $ciwSimply->tanggal) }}" readonly placeholder="Input tanggal">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Section</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Komponen</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Gambar</label>
                                    </div>
                                    <div class="col-3 text-center">
                                        <label for="area" class="font-weight-bold">Pelaksanaan</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="area" class="font-weight-bold">Status Mesin</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="status_mesin" class="font-weight-bold">Standar Waktu</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="waktu" class="font-weight-bold">Waktu</label>
                                    </div>
                                </div>
                                @for ($i = 1; $i <= 21; $i++)
                                <div class="form-group row">
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="section3{{ $i }}" value="{{ $ciwSimply->{'section3'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen3{{ $i }}" value="{{ $ciwSimply->{'komponen3'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2 text-center">
                                        @if($cips1 = \App\Models\SectionCiw3::find($i))
                                            <img src="{{ asset($cips1->gambar) }}" alt="Gambar" style="width: 100px">
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control" name="pelaksanaan3{{ $i }}" readonly style="height: auto; overflow-y: hidden;">{{ $ciwSimply->{'pelaksanaan3'.$i} }} </textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin3{{ $i }}" value="{{ $ciwSimply->{'status_mesin3'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu3{{ $i }}" value="{{ $ciwSimply->{'standar_waktu3'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu3{{ $i }}" value="{{ $ciwSimply->{'waktu3'.$i} }}" readonly>
                                    </div>
                                </div>
                                @endfor
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>    
                            </div>
                        </div>
                        {{-- section 4  --}}
                        <div class="card border-0 shadow rounded mb-4">
                            <h4 class="text-left mt-4 mx-4">Cheklist Inspeksi</h4>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Section</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Komponen</label>
                                    </div>
                                    <div class="col-2 text-center">
                                        <label for="area" class="font-weight-bold">Gambar</label>
                                    </div>
                                    <div class="col-3 text-center">
                                        <label for="area" class="font-weight-bold">Pelaksanaan</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="area" class="font-weight-bold">Status Mesin</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="status_mesin" class="font-weight-bold">Standar Waktu</label>
                                    </div>
                                    <div class="col-1 text-center">
                                        <label for="waktu" class="font-weight-bold">Waktu</label>
                                    </div>
                                </div>
                                @for ($i = 1; $i <= 3; $i++)
                                <div class="form-group row">
                                    <div class="col-2 ">
                                        <input type="text" class="form-control" name="section4{{ $i }}" value="{{ $ciwSimply->{'section4'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen4{{ $i }}" value="{{ $ciwSimply->{'komponen4'.$i} }}" readonly>
                                    </div>
                                    <div class="col-2 text-center">
                                        @if($cips1 = \App\Models\SectionCiw4::find($i))
                                            <img src="{{ asset($cips1->gambar) }}" alt="Gambar" style="width: 100px">
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control" name="pelaksanaan4{{ $i }}"  readonly style="height: auto; overflow-y: hidden;">{{ $ciwSimply->{'pelaksanaan4'.$i} }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin4{{ $i }}" value="{{ $ciwSimply->{'status_mesin4'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu4{{ $i }}" value="{{ $ciwSimply->{'standar_waktu4'.$i} }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu4{{ $i }}" value="{{ $ciwSimply->{'waktu4'.$i} }}" readonly>
                                    </div>
                                </div>
                                @endfor
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-md btn-primary">Approve</button>
                        <a href="{{ route('Operator.CiwSimplies.index') }}" class="btn btn-md btn-secondary ms-2">Back</a>
                    </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Mengubah warna latar belakang input jika standar waktu < waktu dan menghitung total waktu di setiap card
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.card');

            // Fungsi untuk mengubah warna latar belakang input berdasarkan kondisi
            function updateInputBackground(input) {
                var standarWaktuInput = input.parentElement.previousElementSibling.querySelector('.standar-waktu');
                if (parseInt(input.value) > parseInt(standarWaktuInput.value)) {
                    input.classList.remove('good-input');
                    input.classList.add('error-input');
                } else {
                    input.classList.remove('error-input');
                    input.classList.add('good-input');
                }
            }

            // Fungsi untuk menghitung total waktu di setiap card
            function hitungTotalWaktu(card) {
                var total = 0;
                var waktuInputs = card.querySelectorAll('.waktu-input');
                waktuInputs.forEach(function(input) {
                    total += parseInt(input.value) || 0;
                });
                return total;
            }

            // Fungsi untuk memperbarui total waktu di setiap card
            function updateTotalWaktu(card) {
                var totalWaktuSpan = card.querySelector('.total-waktu span');
                totalWaktuSpan.textContent = hitungTotalWaktu(card) + " menit";
            }

            // Panggil fungsi updateInputBackground() dan updateTotalWaktu() setiap kali dokumen dimuat
            cards.forEach(function(card) {
                var waktuInputs = card.querySelectorAll('.waktu-input');
                waktuInputs.forEach(function(input) {
                    // Memanggil fungsi untuk mengubah warna latar belakang input saat dokumen dimuat
                    updateInputBackground(input);
                    input.addEventListener('input', function() {
                        // Memanggil fungsi untuk mengubah warna latar belakang input ketika nilai diubah
                        updateInputBackground(input);
                        // Memperbarui total waktu di setiap card
                        updateTotalWaktu(card);
                    });
                });
                // Memanggil fungsi updateTotalWaktu() secara manual setelah dokumen dimuat
                updateTotalWaktu(card);
            });
        });

    </script>
</body>

</html>
