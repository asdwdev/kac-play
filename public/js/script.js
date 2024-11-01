// MEMBUAT AGAR SCROLL NAVIGASI TIDAK MENGHALANGI SECTION
document.querySelectorAll('.navbar-nav a').forEach(link => {
    link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        
        // Cek apakah href adalah link menuju ID section dengan /# atau #
        if (href.startsWith('/#') || href.startsWith('#')) {
            // Mencegah perilaku default dari tautan
            e.preventDefault();

            // Mendapatkan ID target
            const targetId = href.startsWith('/#') ? href.slice(1) : href; // Menghapus tanda `/` di awal

            // Mengecek apakah pengguna berada di halaman utama
            if (window.location.pathname === "/" || window.location.pathname === "/index.html") {
                // Jika di halaman utama, cari elemen dan gulir
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            } else {
                // Jika di halaman lain, arahkan ke halaman utama dengan hash
                window.location.href = `/${targetId}`;
            }
        }
    });
});

// MENANGANI SCROLL OTOMATIS SAAT HALAMAN DIMUAT
window.addEventListener('load', () => {
    // Memeriksa apakah ada hash di URL
    const hash = window.location.hash;
    if (hash) {
        const targetElement = document.querySelector(hash);
        if (targetElement) {
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    }
});
