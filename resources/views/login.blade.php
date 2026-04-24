<!DOCTYPE html>
<html>
<head>
    <title>Login - Money Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-6 col-lg-4">
            <div class="card shadow">

                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                        </div>

                        <button class="btn btn-warning w-100">Login</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="/" class="text-decoration-none">← Kembali ke Landing Page</a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>
