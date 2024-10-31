// MEMBUAT AGAR SCROLL NAVIGASI TIDAK MENGHALANGI SECTION
// Menambahkan event listener untuk semua tautan navbar
document.querySelectorAll('.navbar-nav a').forEach(link => {
    link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        
        // Cek apakah href adalah link URL atau ID section
        if (href.startsWith('#')) {
            // Mencegah perilaku default dari tautan
            e.preventDefault();

            const targetElement = document.querySelector(href);

            // Menghitung tinggi navbar
            const navbarHeight = document.querySelector('.navbar').offsetHeight;

            // Menghitung posisi gulir target dan menggeser
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbarHeight;

            // Gulir ke posisi target
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
        // Jika href bukan ID section, biarkan tautan berfungsi normal
    });
});