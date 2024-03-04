<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approve Cheklist As Simply</title>
    <style>
        /* CSS styling untuk tampilan dalam format Excel */
        /* Silakan tambahkan CSS sesuai dengan kebutuhan Anda */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 class="text-center">Approve Cheklist As Simply</h3>
    
    @foreach($asSimplies as $asSimply)
        <div>
            <h5>Tanggal: {{$asSimply['tanggal'] }}</h5>
            <h5>Shift: {{$asSimply['shift'] }}</h5>
            <h5>Operator: {{$asSimply['operator'] }}</h5>
            <h5>Supervisor: {{$asSimply['supervisor'] }}</h5>
        </div>
        
        <!-- Cheklist Tools -->
        <h4 class="text-left">Cheklist Tools</h4>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Cara Pengecekan</th>
                    <th>Standar Waktu</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 18; $i++)
                    <tr>
                        <td>{{ $asSimply['alat'.$i] }}</td>
                        <td>{{ $asSimply['posisi_tool'.$i] }}</td>
                        <td>{{ $asSimply['pengecekan1'.$i] }}</td>
                        <td>{{ $asSimply['standar_waktu1'.$i] }}</td>
                        <td>
                            @if ($asSimply['waktu1'.$i] > 1)
                                X
                            @else
                                V
                            @endif
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <!-- Cheklist Cleaning -->
        <h4 class="text-left">Cheklist Cleaning</h4>
        <table>
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Komponen</th>
                    <th>Pelaksanaan</th>
                    <th>Status Mesin</th>
                    <th>Standar Waktu</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 12; $i++)
                    <tr>
                        <td>{{ $asSimply['section'.$i] }}</td>
                        <td>{{ $asSimply['komponen'.$i] }}</td>
                        <td>{{ $asSimply['pelaksanaan'.$i] }}</td>
                        <td>{{ $asSimply['status_mesin1'.$i] }}</td>
                        <td>{{ $asSimply['standar_waktu2'.$i] }}</td>
                        <td>{{ $asSimply['waktu2'.$i] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <!-- Cheklist Inspeksi -->
        <h4 class="text-left">Cheklist Inspeksi</h4>
        <table>
            <thead>
                <tr>
                    <th>Area</th>
                    <th>Cara Pengecekan</th>
                    <th>Status Mesin</th>
                    <th>Standar Waktu</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $asSimply['area'.$i] }}</td>
                        <td>{{ $asSimply['pengecekan2'.$i] }}</td>
                        <td>{{ $asSimply['status_mesin2'.$i] }}</td>
                        <td>{{ $asSimply['standar_waktu3'.$i] }}</td>
                        <td>{{ $asSimply['waktu3'.$i] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <br><br>
    @endforeach
</body>
</html>
