
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="card p-4 shadow" style="width: 400px;">

            <h3 class="text-center mb-4">Register</h3>

            <form action="{{ url('/register') }}" method="POST" class="mb-3">

                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                        id="nama" value="{{ old('nama') }}" required>

                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"
                        id="username" value="{{ old('username') }}" required>

                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- No Telepon -->
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="tel" name="no_telepon" class="form-control"
                        id="no_telepon" value="{{ old('no_telepon') }}" required>

                    @error('no_telepon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Blok -->
                <div class="mb-3">
                    <label for="blok" class="form-label">Blok</label>
                    <input type="text" name="blok" class="form-control"
                        id="blok" value="{{ old('blok') }}" required>

                    @error('blok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"
                        id="password" required>

                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">
                        Konfirmasi Password
                    </label>

                    <input type="password" name="password_confirmation"
                        class="form-control" id="password_confirmation" required>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-success w-100">
                    Register
                </button>

            </form>

            <div class="text-center">
                <p>
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Login di sini</a>
                </p>
            </div>

        </div>

    </div>

</body>
</html>
