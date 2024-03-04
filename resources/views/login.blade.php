<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        html, body {
            height: 100%;
        }
        body {
            background-image: url('/Image/login/bg-login.jpg'); /* Path ke gambar latar belakang */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .center-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* background: #1f5fa7; */
        }
        .card {
            background: rgba(255, 253, 253, 0.951); /* Warna latar belakang kartu dengan transparansi */
        }
    </style>
</head>
<body class="bg-light">
    <div class="center-screen">
        <div class="col-md-4">
            <div class="card border-0 shadow rounded px-3 py-3">
                <h1 class="text-center mb-4 mt-4">Login</h1>
                <div class="text-center">
                    <img src="/Image/login/ffi_logo.png" class="img-fluid" width="200" height="200">
                </div>                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="mb-3 d-grid">
                        <button name="submit" type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
