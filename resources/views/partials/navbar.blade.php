<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">KAC Play</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ !Request::is('/') ? '/posts' : '/#blog' }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#schedule">Jadwal & Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Hubungi Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
