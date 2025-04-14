<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - PT Pulomasjaya</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/image/icon.png') }}">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 p-4">
        <div class="card border-0 shadow rounded-3 w-100" style="max-width: 1011px;">
            <div class="card-body bg-white rounded-3">
                <div class="container p-4">
                    <div class="row align-items-center">
                        <!-- Gambar -->
                        <div class="col-md-6 col-12 mb-3 mb-md-0">
                            <img src="{{ asset('assets/image/login.png') }}" class="img-fluid rounded-start img-login"
                                alt="Login Image">
                        </div>
                        <!-- Form -->
                        <div class="col-md-6 col-12">
                            <p class="grey text-center fs-20">Pulomas Office Park</p>
                            <hr style="border: 1px solid #919191;" class="mb-2">
                            <p class="black fs-12 mb-0">Selamat datang di website CRM Pulomas Office Park</p>

                            <!-- Alert Error -->
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Form Login -->
                            <form class="px-3 pt-1 pb-0" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-1 input-group-sm">
                                    <label for="email" class="form-label black fs-12">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Anda" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="mb-1 input-group flex-column">
                                    <label for="password" class="form-label black fs-12 d-block">Kata Sandi</label>
                                    <div class="input-group input-group-sm">
                                        <input type="password" class="form-control" id="password1" name="password"
                                            placeholder="Kata Sandi" required>
                                        <span class="input-group-text bg-white" id="togglePassword1"
                                            style="cursor: pointer;">
                                            <i class="bi bi-eye"></i>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mt-2 w-100 fs-12">Masuk</button>
                            </form>

                            <p class="black fs-12 pt-2">Belum punya akun? <a href="/register"
                                    class="a-blue text-decoration-none">Daftar disini!</a></p>

                            <div class="row text-center">
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('assets/image/ig.png') }}" alt="Instagram">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('assets/image/fb.png') }}" alt="Facebook">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('assets/image/email.png') }}" alt="Email">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('assets/image/tiktok.png') }}" alt="Tiktok">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('assets/image/x.png') }}" alt="X Twitter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('togglePassword1');
            const password = document.getElementById('password1');

            toggle.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
