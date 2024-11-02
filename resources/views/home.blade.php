@extends('layouts.main')

@section('container')
    <!-- Hero Section -->
    <section id="home" class="hero bg-primary py-5 text-center text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Selamat Datang di Kelas Bermain untuk Anak!</h1>
                    <p class="lead mt-3">
                        Kami menyediakan kelas bermain untuk tumbuh kembang anak Anda secara kreatif dan menyenangkan.
                    </p>
                    <a href="#services" class="btn btn-light btn-lg mt-4">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Tentang Kami Section dengan Tim Pengajar -->
    <section id="about" class="about py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Tentang Kami</h2>
                    <p class="lead">
                        Kami adalah penyelenggara kelas bermain untuk anak-anak, berkomitmen untuk memberikan pengalaman
                        belajar yang menyenangkan dan mendidik.
                    </p>
                </div>
            </div>

            <!-- Tim Pengajar Carousel -->
            <div id="instructorCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <!-- Slide Pertama -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <img src="https://th.bing.com/th/id/R.8a11faecdbdaab9b33f22767abbd9ee7?rik=yJXiO0aULnwshA&riu=http%3a%2f%2fcdn.koreaboo.com%2fwp-content%2fuploads%2f2016%2f12%2fkim-so-hyun-2014.jpg&ehk=BpLbyXA8srF4SUO9Ml7F7USJVNU1KHetJbv9U6W0tUM%3d&risl=&pid=ImgRaw&r=0"
                                    class="rounded-circle mb-3" alt="Pengajar 1"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 1</h5>
                                <p>Spesialisasi: Kelas Seni</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://koreamu.com/wp-content/uploads/2023/03/Kim-Ji-Won.jpg"
                                    class="rounded-circle mb-3" alt="Pengajar 2"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 2</h5>
                                <p>Spesialisasi: Kelas Motorik</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://th.bing.com/th/id/OIP.Cfgqq1-8wzuHS3uhvs8zrAHaJQ?rs=1&pid=ImgDetMain"
                                    class="rounded-circle mb-3" alt="Pengajar 3"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 3</h5>
                                <p>Spesialisasi: Kelas Bermain Peran</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Kedua -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <img src="https://cdn.popmama.com/content-images/community/20230526/community-013fb7929481398e3e01803ce97b4000_800xauto.png"
                                    class="rounded-circle mb-3" alt="Pengajar 4"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 4</h5>
                                <p>Spesialisasi: Kelas Musik</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://t-2.tstatic.net/jogja/foto/bank/images/Foto-Park-Eun-Bin.jpg"
                                    class="rounded-circle mb-3" alt="Pengajar 5"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 5</h5>
                                <p>Spesialisasi: Kelas Bahasa</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://guneykoresinemasi.com/uploads/posts/2021-05/1622380592_go-bo-gyeol1.jpeg"
                                    class="rounded-circle mb-3" alt="Pengajar 6"
                                    style="width: 200px; height: 200px; object-fit: cover">
                                <h5 class="fw-bold">Nama Pengajar 6</h5>
                                <p>Spesialisasi: Kelas Sains</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontrol Carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#instructorCarousel"
                    data-bs-slide="prev" style="position: absolute; top: 50%; transform: translateY(-50%); left: 10px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#instructorCarousel"
                    data-bs-slide="next" style="position: absolute; top: 50%; transform: translateY(-50%); right: 10px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Layanan / Kelas yang Ditawarkan Section -->
    <section id="services" class="services bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Layanan Kami</h2>
                    <p class="lead">
                        Kami menawarkan berbagai kelas bermain yang mendukung tumbuh kembang anak secara menyenangkan
                        dan edukatif.
                    </p>
                </div>
            </div>

            <!-- Daftar Kelas -->
            <div class="row mt-5">
                <!-- Kelas Seni -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/kelas_seni.jpg" class="card-img-top" alt="Kelas Seni">
                        <div class="card-body">
                            <h5 class="card-title">Kelas Seni</h5>
                            <p class="card-text">
                                Mengembangkan kreativitas anak melalui kegiatan melukis, menggambar, dan bermain warna.
                                Kelas ini dirancang untuk membantu anak berekspresi dan memahami seni sejak dini.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kelas Motorik -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/kelas_motorik.jpg" class="card-img-top" alt="Kelas Motorik">
                        <div class="card-body">
                            <h5 class="card-title">Kelas Motorik</h5>
                            <p class="card-text">
                                Kegiatan yang melatih kemampuan motorik kasar dan halus anak. Dilengkapi dengan alat
                                permainan edukatif yang membantu anak aktif dan mengembangkan keterampilan motorik.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kelas Bermain Peran -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/kelas_bermain_peran.jpg" class="card-img-top" alt="Kelas Bermain Peran">
                        <div class="card-body">
                            <h5 class="card-title">Kelas Bermain Peran</h5>
                            <p class="card-text">
                                Anak-anak dapat bermain peran sebagai dokter, chef, atau profesi lainnya. Kegiatan ini
                                bertujuan untuk meningkatkan imajinasi dan keterampilan sosial anak.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Portfolio / Galeri Section -->
    <section id="portfolio" class="portfolio py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Portfolio</h2>
                    <p class="lead">
                        Berikut adalah beberapa momen yang telah kami abadikan dari kegiatan kelas bermain untuk
                        anak-anak.
                    </p>
                </div>
            </div>

            <!-- Galeri Gambar -->
            <div class="row g-4 mt-5">
                <!-- Gambar 1 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="https://th.bing.com/th/id/OIP.-ToGaI0lIKg0tW9NvgR7wQHaE8?w=1024&h=683&rs=1&pid=ImgDetMain"
                            class="img-fluid rounded" alt="Event 1" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal" data-slide-to="0">
                    </div>
                </div>

                <!-- Gambar 2 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="https://th.bing.com/th/id/OIP.sVkV1KkxHz_MzTcewhnaNQHaE8?w=2560&h=1709&rs=1&pid=ImgDetMain"
                            class="img-fluid rounded" alt="Event 2" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal" data-slide-to="1">
                    </div>
                </div>

                <!-- Gambar 3 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="https://dp4g669tqdae4.cloudfront.net/content/uploads/2020/11/Multi-ethnic-group-of-students-in-class-1168223009_1258x838.jpeg"
                            class="img-fluid rounded" alt="Event 3" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal" data-slide-to="2">
                    </div>
                </div>
                <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
            </div>
        </div>
    </section>

    <!-- Portfolio Modal -->
    <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <img src="https://th.bing.com/th/id/OIP.-ToGaI0lIKg0tW9NvgR7wQHaE8?w=1024&h=683&rs=1&pid=ImgDetMain"
                                class="img-fluid w-100" alt="Event 1">
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <img src="https://th.bing.com/th/id/OIP.sVkV1KkxHz_MzTcewhnaNQHaE8?w=2560&h=1709&rs=1&pid=ImgDetMain"
                                class="img-fluid w-100" alt="Event 2">
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <img src="https://dp4g669tqdae4.cloudfront.net/content/uploads/2020/11/Multi-ethnic-group-of-students-in-class-1168223009_1258x838.jpeg"
                                class="img-fluid w-100" alt="Event 3">
                        </div>
                    </div>

                    <!-- Kontrol Carousel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog / Artikel Section -->
    <section id="blog" class="blog bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Blog & Artikel</h2>
                    <p class="lead">
                        Baca artikel dan tips terbaru kami tentang perkembangan anak, ide bermain, dan kegiatan edukatif
                        untuk anak.
                    </p>
                </div>
            </div>

            <!-- Daftar Artikel -->
            <div class="row g-4 my-5">
                <!-- Artikel 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/img/artikel-img.jpg" class="card-img-top" alt="Artikel 1">
                        <div class="card-body">
                            <h5 class="card-title">Pentingnya Bermain untuk Tumbuh Kembang Anak</h5>
                            <p class="card-text">
                                Bermain memiliki peran penting dalam perkembangan fisik dan mental anak. Cari tahu
                                bagaimana aktivitas bermain dapat mendukung tumbuh kembang mereka.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/img/artikel-img.jpg" class="card-img-top" alt="Artikel 2">
                        <div class="card-body">
                            <h5 class="card-title">Ide Kegiatan Kreatif untuk Anak di Rumah</h5>
                            <p class="card-text">
                                Beragam ide kegiatan kreatif yang dapat dilakukan di rumah untuk mendukung perkembangan
                                keterampilan anak dengan cara yang menyenangkan.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/img/artikel-img.jpg" class="card-img-top" alt="Artikel 3">
                        <div class="card-body">
                            <h5 class="card-title">Mengapa Interaksi Sosial Penting bagi Anak?</h5>
                            <p class="card-text">
                                Interaksi sosial adalah bagian penting dari perkembangan anak. Pelajari mengapa dan
                                bagaimana cara membantu anak dalam membangun keterampilan sosialnya.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/posts" class="text-decoration-none">Lihat Semua Postingan</a>
        </div>
    </section>


    <!-- Jadwal & Registrasi Kelas Section -->
    <section id="schedule" class="schedule py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Jadwal & Registrasi Kelas</h2>
                    <p class="lead">
                        Temukan jadwal kelas yang sesuai untuk anak Anda dan daftarkan mereka untuk pengalaman belajar
                        yang menyenangkan!
                    </p>
                </div>
            </div>

            <!-- Jadwal Kelas -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="mb-3 text-center">Jadwal Kelas</h3>
                    <table class="table-bordered table-striped table text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama Kelas</th>
                                <th>Hari</th>
                                <th>Waktu</th>
                                <th>Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kelas Seni</td>
                                <td>Senin & Rabu</td>
                                <td>10:00 - 11:30</td>
                                <td>1,5 Jam</td>
                            </tr>
                            <tr>
                                <td>Kelas Motorik</td>
                                <td>Selasa & Kamis</td>
                                <td>13:00 - 14:30</td>
                                <td>1,5 Jam</td>
                            </tr>
                            <tr>
                                <td>Kelas Bermain Peran</td>
                                <td>Sabtu</td>
                                <td>09:00 - 11:00</td>
                                <td>2 Jam</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Formulir Registrasi -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <h3 class="mb-3 text-center">Formulir Registrasi</h3>
                    <form action="/registration" method="post">
                        <div class="mb-3">
                            <label for="childName" class="form-label">Nama Anak</label>
                            <input type="text" class="form-control" id="childName" placeholder="Masukkan nama anak"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="parentName" class="form-label">Nama Orang Tua</label>
                            <input type="text" class="form-control" id="parentName"
                                placeholder="Masukkan nama orang tua" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactNumber" class="form-label">Nomor Kontak</label>
                            <input type="tel" class="form-control" id="contactNumber"
                                placeholder="Masukkan nomor kontak" required>
                        </div>
                        <div class="mb-3">
                            <label for="classSelection" class="form-label">Pilih Kelas</label>
                            <select class="form-select" id="classSelection" required>
                                <option value="">Pilih kelas</option>
                                <option value="Kelas Seni">Kelas Seni</option>
                                <option value="Kelas Motorik">Kelas Motorik</option>
                                <option value="Kelas Bermain Peran">Kelas Bermain Peran</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Hubungi Kami Section -->
    <section id="contact" class="contact bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Hubungi Kami</h2>
                    <p class="lead">
                        Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan
                        ragu untuk menghubungi kami.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Informasi Kontak -->
                <div class="col-md-6">
                    <h4 class="mb-4">Informasi Kontak</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-geo-alt-fill me-2"></i> Jl. Contoh Alamat No. 123, Jakarta
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-telephone-fill me-2"></i> +62 812-3456-7890
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope-fill me-2"></i> email@contoh.com
                        </li>
                        <li>
                            <i class="bi bi-clock-fill me-2"></i> Senin - Jumat: 09:00 - 17:00
                        </li>
                    </ul>
                </div>

                <!-- Formulir Kontak -->
                <div class="col-md-6">
                    <h4 class="mb-4">Kirim Pesan</h4>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
