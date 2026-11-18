
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Monitoring Siskamling</title>

    <!-- Bootstrap SB Admin 2 -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">

                                    <!-- Heading -->
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">
                                            Registrasi Akun
                                        </h1>

                                        <p class="mb-4 text-gray-600">
                                            Sistem Monitoring Patroli Jaga Keamanan Lingkungan
                                        </p>
                                    </div>

                                    <!-- Form Register -->
                                    <form action="{{ url('/register') }}"
                                        method="POST" class="user">

                                        @csrf

                                        <!-- Nama -->
                                        <div class="form-group">
                                            <input type="text"
                                                name="nama"
                                                class="form-control form-control-user
                                                @error('nama') is-invalid @enderror"
                                                placeholder="Nama Lengkap"
                                                value="{{ old('nama') }}"
                                                required>

                                            @error('nama')
                                                <div class="text-danger small ml-3 mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Username -->
                                        <div class="form-group">
                                            <input type="text"
                                                name="username"
                                                class="form-control form-control-user
                                                @error('username') is-invalid @enderror"
                                                placeholder="Username"
                                                value="{{ old('username') }}"
                                                required>

                                            @error('username')
                                                <div class="text-danger small ml-3 mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- No Telepon -->
                                        <div class="form-group">
                                            <input type="tel"
                                                name="no_telepon"
                                                class="form-control form-control-user
                                                @error('no_telepon') is-invalid @enderror"
                                                placeholder="Nomor Telepon"
                                                value="{{ old('no_telepon') }}"
                                                required>

                                            @error('no_telepon')
                                                <div class="text-danger small ml-3 mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Blok -->
                                        <div class="form-group">
                                            <input type="text"
                                                name="blok"
                                                class="form-control form-control-user
                                                @error('blok') is-invalid @enderror"
                                                placeholder="Blok Rumah (Contoh: G-10)"
                                                value="{{ old('blok') }}"
                                                required>

                                            @error('blok')
                                                <div class="text-danger small ml-3 mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <input type="password"
                                                name="password"
                                                class="form-control form-control-user
                                                @error('password') is-invalid @enderror"
                                                placeholder="Password"
                                                required>

                                            @error('password')
                                                <div class="text-danger small ml-3 mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <input type="password"
                                                name="password_confirmation"
                                                class="form-control form-control-user"
                                                placeholder="Konfirmasi Password"
                                                required>
                                        </div>

                                        <!-- Submit -->
                                        <button type="submit"
                                            class="btn btn-success btn-user btn-block">
                                            <i class="fas fa-user-plus mr-2"></i>
                                            Register
                                        </button>

                                    </form>

                                    <hr>

                                    <!-- Login Link -->
                                    <div class="text-center">
                                        <p class="small mb-0">
                                            Sudah punya akun?
                                            <a href="{{ route('login') }}">
                                                Login di sini
                                            </a>
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap & SB Admin 2 Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registrasi Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#1cc88a',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

</body>
</html>
