<?php
// ==== Data CV Tristan Prayogo ====
$profile = [
    "name" => "Tristan Prayogo",
    "role" => "Data Analyst",
    "phone" => "0856-9252-2215",
    "email" => "tristan.pra07@gmail.com",
    "address" => "Jl. Hj Sarin No. 101 Rt 009/Rw 002 Kel. Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan, DKI Jakarta 12640",
    "school" => "SMK Citra Negara",
    "description" => "Remaja berusia 18 tahun, saat ini bersekolah di SMK Citra Negara jurusan PPLG. 
    Saya memiliki kemampuan berbicara di publik, pekerja keras, rajin, dan suka belajar hal baru.",
    "social" => [
        "linkedin" => "#",
        "github" => "https://github.com/Titanbiru/",
        "instagram" => "https://www.instagram.com/tristn_pryog/"
    ]
];

$experiences = [
    [
        "periode" => "Juli 2025 - Sekarang",
        "posisi" => "Mitra Shopee Food Driver",
        "deskripsi" => "Menjadi bagian dari mitra Shopee Food Driver, pengantar barang atau makanan dan minuman."
    ],
    [
        "periode" => "Januari 2025 - April 2025",
        "posisi" => "Magang di Universitas Indonesia",
        "deskripsi" => "Melakukan kegiatan magang yang dilaksanakan oleh sekolah."
    ],
    [
        "periode" => "Juli 2025 - April 2026",
        "posisi" => "Pengurus IT Club - Game Tech",
        "deskripsi" => "Menjadi bagian pengurus IT Club yang mengatur beberapa perlengkapan di IT Club."
    ]
];

$education = [
    [
        "tahun" => "2023 - 2026",
        "instansi" => "SMK Citra Negara",
        "jurusan" => "Pengembangan Perangkat Lunak dan Gim"
    ],
    [
        "tahun" => "2026 - 2030",
        "instansi" => "Sekolah Tinggi Ilmu Statistika",
        "jurusan" => "D4 Komputasi Statistika"
    ]
];

$skills = ["CSS", "HTML", "PHP", "JavaScript", "Public Speaking", "Pemecahan Masalah"];

$hobbies = ["Kuliner", "Bersepeda", "Berlari", "Menonton Film", "Mendengarkan Musik", "Bermain Video Game"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile["name"]; ?> | Portfolio</title>
    <link rel="stylesheet" href="styling/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"><?= explode(' ', $profile["name"])[0]; ?><span> <?= explode(' ', $profile["name"])[1]; ?></span></a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#education">Education</a>
            <a href="#services">Experience</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Hello, I'm <span><?= $profile["name"]; ?></span></h1>
            <h3 class="text-animation">I'm a <span></span></h3>
            <p><?= $profile["description"]; ?></p>

            <div class="social-icon">
                <a href="<?= $profile["social"]["linkedin"]; ?>"><i class='bx bxl-linkedin'></i></a>
                <a href="<?= $profile["social"]["github"]; ?>"><i class='bx bxl-github'></i></a>
                <a href="<?= $profile["social"]["instagram"]; ?>"><i class='bx bxl-instagram-alt'></i></a>
            </div>

            <div class="btn-group">
                <a href="#contact" class="btn">Hire</a>
                <a href="#contact" class="btn">Contact</a>
            </div>
        </div>
        <div class="home-img">
            <img src="♱.jpeg" alt="Tristan Prayogo">
        </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">Education</h2>
        <div class="timeline-items">
            <?php foreach ($education as $edu): ?>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date"><?= $edu["tahun"]; ?></div>
                <div class="timeline-content">
                    <h3><?= $edu["instansi"]; ?></h3>
                    <p><?= $edu["jurusan"]; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="services" id="services">
        <h2 class="heading">Experience</h2>
        <div class="services-container">
            <?php foreach ($experiences as $exp): ?>
            <div class="services-box">
                <div class="services-info">
                    <h4><?= $exp["posisi"]; ?></h4>
                    <p><b><?= $exp["periode"]; ?></b><br><?= $exp["deskripsi"]; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="education" id="skills">
        <h2 class="heading">Skills</h2>
        <div class="timeline-items">
            <?php foreach ($skills as $skill): ?>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3><?= $skill; ?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="services" id="contact">
        <h2 class="heading">Contact Me</h2>
        <div class="services-container">
            <div class="services-box">
                <div class="services-info">
                    <h4>Kontak</h4>
                    <p>📞 <?= $profile["phone"]; ?><br>
                        📧 <?= $profile["email"]; ?><br>
                        📍 <?= $profile["address"]; ?></p>
                </div>
            </div>
            <div class="services-box">
                <div class="services-info">
                    <h4>Hobi</h4>
                    <p><?= implode(", ", $hobbies); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 <span>lmao pryg</span>. All rights reserved.</p>
            <div class="footer-socials">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top -->
    <a href="#home" class="scroll-top">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <script>
        // Navbar active link saat scroll
        let menuIcon = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');
        
        // Toggle menu icon dan navbar saat klik
        menuIcon.onclick = () => {
            menuIcon.classList.toggle('bx-x');
            navbar.classList.toggle('active');
        };
        
        // Hapus menu icon dan navbar saat klik link (untuk mobile)
        navbar.classlist.remove('active');
        menuIcon.classlist.remove('bx-x');

        window.onscroll = () => {
            let sections = document.querySelectorAll('section');
            let navLinks = document.querySelectorAll('.navbar a');

            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        document.querySelector('.navbar a[href*=' + id + ']').classList.add('active');
                    });
                }
            });

            // 🔽 Tambahkan bagian ini agar panah muncul saat scroll
            const scrollTopBtn = document.querySelector(".scroll-top");
            if (window.scrollY > 400) {
                scrollTopBtn.classList.add("show");
            } else {
                scrollTopBtn.classList.remove("show");
            }
        };
    </script>

</body>
</html>
