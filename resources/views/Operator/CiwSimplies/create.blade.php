<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create New Cheklist As Simply - Frisian Flag Indonesia</title>
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
                <h3 class="text-center mb-4 text-white">Tambah Cheklist Ciw Simply</h3>
                <div>
                    <form action="{{ route('Operator.CiwSimplies.store') }}" method="POST">
                        @csrf
                    {{-- card section 1 --}}
                    <div class="card border-0 shadow rounded mb-4">
                        <h4 class="text-left mt-4 mx-4">Cheklist Cleaning</h4>
                        <div class="card-body">
                            @csrf
                                <div class="form-group row">
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
                                        <input type="number" max="3" min="1" class="form-control" name="shift" value="{{ old('shift') }}" required placeholder="Shift">
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" class="form-control" name="line" value="{{ old('line') }}" required placeholder="line">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" class="form-control" name="operator" value="{{ old('operator') }}" required placeholder="Nama Operator">
                                    </div>
                                    <div class="col-sm">
                                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}" required placeholder="input tanggal">
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
                                @foreach($ciw1s as $section)
                                <div class="form-group row">
                                    <div class="col-2 ">
                                        <input type="text" class="form-control" name="section1{{ $section->id }}" value="{{ $section->nama }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen1{{ $section->id }}" value="{{ $section->komponen }}" readonly>
                                    
                                    </div>
                                    <div class="col-2 text-center">
                                        <img src="{{ asset($section->gambar) }}" alt="Gambar" style="width: 100px">
                                    </div>
                                    <div class="col-3 ">
                                        <textarea type="text" class="form-control" name="pelaksanaan1{{ $section->id }}" readonly style="height: auto; overflow-y: hidden;" >{{ $section->pelaksanaan }} </textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin1{{ $section->id }}" value="{{ $section->status_mesin }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu1{{ $section->id }}" value="{{ $section->standar_waktu }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu1{{ $section->id }}" value="{{ old('waktu2') }}" required>
                                    </div>
                                </div>                            
                                @endforeach
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>                                                              
                        </div>
                    </div>
                    {{-- card section 2--}}
                    <div class="card border-0 shadow rounded mb-4">
                        <h4 class="text-left mt-4 mx-4">Cheklist Lubrikasi</h4>
                        <div class="card-body">
                            @csrf
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
                                @foreach($ciw2s as $section)
                                <div class="form-group row">
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="section2{{ $section->id }}" value="{{ $section->nama }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen2{{ $section->id }}" value="{{ $section->komponen }}" readonly>
                                    </div>
                                    <div class="col-2 text-center">
                                        <img src="{{ asset($section->gambar) }}" alt="Gambar" style="width: 100px">
                                    </div>
                                    <div class="col-3 ">
                                        <textarea type="text" class="form-control" name="pelaksanaan2{{ $section->id }}" readonly style="height: auto; overflow-y: hidden;">{{ $section->pelaksanaan }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin2{{ $section->id }}" value="{{ $section->status_mesin }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu2{{ $section->id }}" value="{{ $section->standar_waktu }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu2{{ $section->id }}" value="{{ old('waktu2') }}" required>
                                    </div>
                                </div>                            
                                @endforeach
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>
                        </div>
                    </div>
                    {{-- card section 3 --}}
                    <div class="card border-0 shadow rounded mb-4">
                        <h4 class="text-left mt-4 mx-4">Cheklist Inspeksi</h4>
                        <div class="card-body">
                            @csrf
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
                                @foreach($ciw3s as $section)
                                <div class="form-group row">
                                    <div class="col-2 ">
                                        <input type="text" class="form-control" name="section3{{ $section->id }}" value="{{ $section->nama }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen3{{ $section->id }}" value="{{ $section->komponen }}" readonly>
                                    
                                    </div>
                                    <div class="col-2 text-center">
                                        <img src="{{ asset($section->gambar) }}" alt="Gambar" style="width: 100px">
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control" name="pelaksanaan3{{ $section->id }}" readonly style="height: auto; overflow-y: hidden;">{{ $section->pelaksanaan }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin3{{ $section->id }}" value="{{ $section->status_mesin }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu3{{ $section->id }}" value="{{ $section->standar_waktu }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu3{{ $section->id }}" value="{{ old('waktu2') }}" required>
                                    </div>
                                </div>                            
                                @endforeach
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>
                        </div>
                    </div>
                    {{-- card section 4--}}
                    <div class="card border-0 shadow rounded mb-4">
                        <h4 class="text-left mt-4 mx-4">Cheklist Inspeksi (Pengecekan 1 Jam Sebelum Finish Produksi)</h4>
                        <div class="card-body">
                            @csrf
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
                                @foreach($ciw4s as $section)
                                <div class="form-group row">
                                    <div class="col-2 ">
                                        <input type="text" class="form-control" name="section4{{ $section->id }}" value="{{ $section->nama }}" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" name="komponen4{{ $section->id }}" value="{{ $section->komponen }}" readonly>
                                    
                                    </div>
                                    <div class="col-2 text-center">
                                        <img src="{{ asset($section->gambar) }}" alt="Gambar" style="width: 100px">
                                    </div>
                                    <div class="col-3">
                                        <textarea type="text" class="form-control " name="pelaksanaan4{{ $section->id }}"  readonly style="height: auto; overflow-y: hidden;" >{{ $section->pelaksanaan }}</textarea>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" class="form-control text-center" name="status_mesin4{{ $section->id }}" value="{{ $section->status_mesin }}" readonly>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control standar-waktu text-center" name="standar_waktu4{{ $section->id }}" value="{{ $section->standar_waktu }}" readonly>
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" class="form-control waktu-input text-center" name="waktu4{{ $section->id }}" value="{{ old('waktu2') }}" required>
                                    </div>
                                </div>                            
                                @endforeach
                                <div class="col-sm total-waktu justify-content-end" id="total-waktu-card1" style="pointer-events: none; background-color: #f9f9f9; border: 1px solid #ced4da; font-size: larger;">
                                    Total waktu: <span id="total-waktu-1">0</span>
                                </div>
                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                        <a href="{{ route('Operator.CiwSimplies.index') }}" class="btn btn-md btn-secondary ms-2">Back</a>
                    </div>                    
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Mengubah warna latar belakang input jika standar waktu < waktu
        document.addEventListener('DOMContentLoaded', function() {
            var waktuInputs = document.querySelectorAll('.waktu-input');
            var standarWaktuInputs = document.querySelectorAll('.standar-waktu');
    
            waktuInputs.forEach(function(input, index) {
                input.addEventListener('input', function() {
                    if (parseInt(input.value) > parseInt(standarWaktuInputs[index].value)) {
                        input.classList.remove('good-input');
                        input.classList.add('error-input');
                    } else {
                        input.classList.remove('error-input');
                        input.classList.add('good-input');
                    }
                });
            });
    
            standarWaktuInputs.forEach(function(input, index) {
                input.addEventListener('input', function() {
                    var waktuInput = waktuInputs[index];
                    if (parseInt(waktuInput.value) > parseInt(input.value)) {
                        waktuInput.classList.remove('good-input');
                        waktuInput.classList.add('error-input');
                    } else {
                        waktuInput.classList.remove('error-input');
                        waktuInput.classList.add('good-input');
                    }
                });
            });
        });
    </script>
    <script>
        // Mengubah warna latar belakang input jika standar waktu < waktu
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.card');
    
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
    
            // Panggil fungsi updateTotalWaktu() setiap kali ada perubahan pada input
            cards.forEach(function(card) {
                var waktuInputs = card.querySelectorAll('.waktu-input');
                waktuInputs.forEach(function(input) {
                    input.addEventListener('input', function() {
                        updateTotalWaktu(card);
                    });
                });
            });
        });
    </script>
    
</body>

</html>
