<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyimpanan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f9f4ec; font-family: 'Segoe UI', sans-serif;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#d6b899;">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold" style="color:#4e342e;">
                📚 Sistem Buku
            </span>
            <div class="d-flex ms-auto">
                <a class="nav-link fw-semibold me-3" href="{{ route('dashboard') }}" style="color:#4e342e;">Dashboard</a>
                <a class="nav-link fw-semibold me-3" href="{{ route('pengelolaan') }}" style="color:#4e342e;">Pengelolaan Buku</a>
                <a class="nav-link fw-semibold" href="{{ route('profile.page') }}" style="color:#4e342e;">Lihat Profil</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="py-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5" style="background-color:#d6b899; color:#4e342e;">
        © 2025 Lovya Dila Syahira | Sistem Penyimpanan Buku
    </footer>
</body>
</html>
