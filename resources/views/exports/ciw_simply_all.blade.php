<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approve Cheklist Ciw Simply</title>
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
    <h3 class="text-center">Approve Cheklist Ciw Simply</h3>
    
    @foreach($ciwSimplies as $ciwSimply)
        <div>
            <h5>Tanggal: {{$ciwSimply['tanggal'] }}</h5>
            <h5>Shift: {{$ciwSimply['shift'] }}</h5>
            <h5>Operator: {{$ciwSimply['operator'] }}</h5>
            <h5>Supervisor: {{$ciwSimply['supervisor'] }}</h5>
        </div>
        
        <!-- Cheklist Tools -->
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
            @for ($i = 1; $i <= 13; $i++)
                <tr>
                    <td>{{ $cipSimply['section1'.$i] }}</td>
                    <td>{{ $cipSimply['komponen1'.$i] }}</td>
                    <td>{{ $cipSimply['pelaksanaan1'.$i] }}</td>
                    <td>{{ $cipSimply['status_mesin1'.$i] }}</td>
                    <td>{{ $cipSimply['standar_waktu1'.$i] }}</td>
                    <td>{{ $cipSimply['waktu1'.$i] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- Cheklist Cleaning -->
    <h4 class="text-left">Cheklist Lubrikasi</h4>
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
            @for ($i = 1; $i <= 8; $i++)
                <tr>
                    <td>{{ $cipSimply['section2'.$i] }}</td>
                    <td>{{ $cipSimply['komponen2'.$i] }}</td>
                    <td>{{ $cipSimply['pelaksanaan2'.$i] }}</td>
                    <td>{{ $cipSimply['status_mesin2'.$i] }}</td>
                    <td>{{ $cipSimply['standar_waktu2'.$i] }}</td>
                    <td>{{ $cipSimply['waktu2'.$i] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    <h4 class="text-left">Cheklist Inspeksi</h4>
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
            @for ($i = 1; $i <= 21; $i++)
                <tr>
                    <td>{{ $cipSimply['section3'.$i] }}</td>
                    <td>{{ $cipSimply['komponen3'.$i] }}</td>
                    <td>{{ $cipSimply['pelaksanaan3'.$i] }}</td>
                    <td>{{ $cipSimply['status_mesin3'.$i] }}</td>
                    <td>{{ $cipSimply['standar_waktu3'.$i] }}</td>
                    <td>{{ $cipSimply['waktu3'.$i] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- Cheklist Cleaning -->
    <h4 class="text-left">Cheklist Inspeksi Sebelum Finish Produksi</h4>
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
            @for ($i = 1; $i <= 3; $i++)
                <tr>
                    <td>{{ $cipSimply['section4'.$i] }}</td>
                    <td>{{ $cipSimply['komponen4'.$i] }}</td>
                    <td>{{ $cipSimply['pelaksanaan4'.$i] }}</td>
                    <td>{{ $cipSimply['status_mesin4'.$i] }}</td>
                    <td>{{ $cipSimply['standar_waktu4'.$i] }}</td>
                    <td>{{ $cipSimply['waktu4'.$i] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
        <br><br>
    @endforeach
</body>
</html>
