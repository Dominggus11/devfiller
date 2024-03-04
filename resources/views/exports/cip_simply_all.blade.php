<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approve Cheklist Cip Simply</title>
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
    <h3 class="text-center">Approve Cheklist Cip Simply</h3>
    
    @foreach($cipSimplies as $cipSimply)
        <div>
            <h5>Tanggal: {{$cipSimply['tanggal'] }}</h5>
            <h5>Shift: {{$cipSimply['shift'] }}</h5>
            <h5>Operator: {{$cipSimply['operator'] }}</h5>
            <h5>Supervisor: {{$cipSimply['supervisor'] }}</h5>
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
            @for ($i = 1; $i <= 15; $i++)
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
    <h4 class="text-left">Cheklist Inspkesi</h4>
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
        <br><br>
    @endforeach
</body>
</html>
