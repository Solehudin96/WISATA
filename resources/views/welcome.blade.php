<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <title>obyek Wisata Cipeundeuy Endah – Wisata Sungai Sindangpano, Rajagaluh, Majalengka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Destinasi wisata alam Cipeudeuy Endah di Desa Sindangpano, Rajagaluh, Majalengka. Nikmati kejernihan sungai, river tubing, gazebo, dan suasana pedesaan yang asri." />
  <meta name="keywords" content="Cipeudeuy Endah, Sindangpano, Rajagaluh, Majalengka, wisata sungai, river tubing, desa wisata" />

  <!-- Open Graph -->
  <meta property="og:title" content="Cipeudeuy Endah – Wisata Sungai Sindangpano" />
  <meta property="og:description" content="River tubing dan wisata alam di Desa Sindangpano, Rajagaluh, Majalengka." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="{{ asset('assets/img/og-cover.jpg') }}"/>
  <meta property="og:url" content="https://contoh-domain-anda.com" />

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries -->
  <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom Styles -->
  <style>
    :root {
      --primary: #0ea5e9;
      --dark: #0f172a;
      --muted: #64748b;
    }

    body {
      font-family: "Open Sans", system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, "Noto Sans", "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji";
      color: #1f2937;
    }

    .navbar-brand h1,
    .brand-title {
      font-family: "Montserrat", sans-serif;
      font-weight: 800;
      letter-spacing: 0.5px;
    }

    .text-primary { color: var(--primary) !important; }
    .bg-primary { background-color: var(--primary) !important; }
    .btn-primary { background-color: var(--primary); border-color: var(--primary); }
    .btn-primary:hover { filter: brightness(0.95); }

    /* Spinner */
    #spinner.show { visibility: visible; opacity: 1; }
    #spinner { visibility: hidden; opacity: 0; transition: all .3s ease; z-index: 2000; }

    /* Header Carousel */
    .header-carousel .owl-carousel-item { position: relative; }
    .header-carousel .owl-carousel-item img { width: 100%; height: 80vh; object-fit: cover; }
    .header-overlay { position: absolute; inset: 0; background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.35)); }

    .hero-caption {
      position: absolute; inset: 0; display: grid; place-items: center; text-align: center; padding: 0 1rem;
    }

    .hero-title { font-family: "Montserrat", sans-serif; font-weight: 800; }

    /* Section spacing */
    section { padding: 80px 0; }
    .section-title { font-family: "Montserrat", sans-serif; font-weight: 800; }
    .section-subtitle { color: var(--muted); }

    /* Cards */
    .feature-card, .service-card, .price-card { border: 1px solid #e5e7eb; border-radius: 1rem; background: #fff; transition: transform .2s ease, box-shadow .2s ease; }
    .feature-card:hover, .service-card:hover, .price-card:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(2, 6, 23, 0.08); }

    /* Attractions carousel */
    .attraction-item img { height: 230px; object-fit: cover; width: 100%; }

    /* Gallery */
    .gallery-item img { height: 260px; object-fit: cover; width: 100%; border-radius: .75rem; }

    /* Footer */
    .footer { background: #0b1220; color: #94a3b8; }
    .footer a { color: #cbd5e1; text-decoration: none; }
    .footer a:hover { color: #fff; }

    /* Back to top */
    .back-to-top { position: fixed; right: 20px; bottom: 20px; display: none; z-index: 1000; }
  </style>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top shadow-sm">
    <div class="container">
      <a href="#home" class="navbar-brand d-flex align-items-center">
      <img src="{{ asset('assets/img/logo_desa.png') }}" alt="Logo" width="50" height="50"> 
        <span class="brand-title h4 mb-0"> Obyek wisata Cipeundeuy Endah</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#attractions">Atraksi</a></li>
          <li class="nav-item"><a class="nav-link" href="#harga">Tiket</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header / Hero Start -->
  <header id="home" class="position-relative">
    <div class="header-carousel owl-carousel">
      <div class="owl-carousel-item">
        <img src="{{asset('assets/img/cipeundeuy.png')}}"  alt="Sungai Cipeundeuy Endah – Sindangpano" />
        <div class="header-overlay"></div>
        <div class="hero-caption text-white">
          <div class="container">
            <h1 class="hero-title display-4 mb-3">Obyek wisata Cipeundeuy Endah</h1>
            <p class="lead mb-4">Wisata Sungai & River Tubing • Desa Sindangpano, Rajagaluh, Majalengka</p>
            <div class="d-flex gap-2 justify-content-center flex-wrap">
              <a href="#attractions" class="btn btn-primary px-4 py-2"><i class="fas fa-water me-2"></i>Jelajahi Atraksi</a>
              <a href="#kontak" class="btn btn-outline-light px-4 py-2"><i class="fab fa-whatsapp me-2"></i>Reservasi</a>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item">
        <img src="{{ asset('assets/img/foto_1.png') }}" alt="River Tubing Cipeudeuy Endah">
        <div class="header-overlay"></div>
        <div class="hero-caption text-white">
          <div class="container">
            <h2 class="hero-title display-5 mb-3">Alam Asri, Air Jernih</h2>
            <p class="mb-4">Pengalaman seru menyusuri sungai bersama keluarga & komunitas</p>
            <a href="#harga" class="btn btn-primary px-4 py-2">Lihat Paket Tiket</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Tentang Start -->
  <section id="about">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <img class="img-fluid rounded-4 shadow" src="{{ asset('assets/img/spanduk.jpg') }}" alt="Tentang Cipeundeuy Endah" />
        </div>
        <div class="col-lg-6">
          <h2 class="section-title mb-3">Tentang Cipeundeuy Endah</h2>
          <p class="section-subtitle mb-4">Desa Sindangpano • Rajagaluh • Majalengka</p>
          <p>
            Cipeundeuy Endah adalah destinasi wisata sungai yang menawarkan arus tenang, air jernih, dan panorama pedesaan yang menenangkan. Dikelola oleh
            <strong>Karang Taruna Desa Sindangpano</strong>, wisata ini menjadi pilihan favorit untuk <em>river tubing</em>, bermain air, dan bersantai di gazebo.
          </p>
          <div class="row g-3 mt-3">
            <div class="col-sm-6">
              <div class="feature-card p-4 h-100">
                <i class="fas fa-life-ring fa-2x text-primary mb-3"></i>
                <h6 class="mb-1">River Tubing Aman</h6>
                <p class="mb-0 small text-muted">Peralatan standar & pemandu lokal.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="feature-card p-4 h-100">
                <i class="fas fa-tree fa-2x text-primary mb-3"></i>
                <h6 class="mb-1">Alam Asri</h6>
                <p class="mb-0 small text-muted">Pepohonan rindang & udara sejuk.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="feature-card p-4 h-100">
                <i class="fas fa-home fa-2x text-primary mb-3"></i>
                <h6 class="mb-1">Gazebo & Warung</h6>
                <p class="mb-0 small text-muted">Camilan lokal & tempat istirahat.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="feature-card p-4 h-100">
                <i class="fas fa-camera fa-2x text-primary mb-3"></i>
                <h6 class="mb-1">Spot Foto</h6>
                <p class="mb-0 small text-muted">Sudut Instagramable di sepanjang sungai.</p>
              </div>
            </div>
          </div>
          <div class="d-flex gap-2 mt-4">
            <a href="#lokasi" class="btn btn-outline-secondary"><i class="bi bi-geo-alt me-2"></i>Panduan Arah</a>
            <a href="#kontak" class="btn btn-primary"><i class="fab fa-whatsapp me-2"></i>Tanya & Reservasi</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang End -->

  <!-- Atraksi Start -->
  <section id="attractions" class="bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Atraksi & Aktivitas</h2>
        <p class="section-subtitle">Kegiatan favorit pengunjung Cipeundeuy Endah</p>
      </div>
      <div class="owl-carousel attractions-carousel">
        <div class="attraction-item bg-white rounded-4 p-3 shadow-sm">
        <img src="{{ asset('assets/img/ban.jpg') }}" alt="River Tubing" class="rounded-3 mb-3">
          <h6>River Tubing</h6>
          <p class="small text-muted mb-0">Susur sungai dengan ban & pelampung, ditemani pemandu.</p>
        </div>
        <div class="attraction-item bg-white rounded-4 p-3 shadow-sm">
        <img src="{{ asset('assets/img/a.jpg') }}" alt="Bermain Air Keluarga" class="rounded-3 mb-3">
          <h6>Bermain Air Keluarga</h6>
          <p class="small text-muted mb-0">Area dangkal ramah anak untuk bermain air.</p>
        </div>
        <div class="attraction-item bg-white rounded-4 p-3 shadow-sm">
        <img src="{{ asset('assets/img/vila.jpg') }}" alt="Gazebo & Piknik" class="rounded-3 mb-3">
          <h6>Gazebo & Piknik</h6>
          <p class="small text-muted mb-0">Santai di gazebo sambil menikmati kuliner lokal.</p>
        </div>
        <div class="attraction-item bg-white rounded-4 p-3 shadow-sm">
        <img src="{{ asset('assets/img/b.jpg') }}" alt="Spot Foto" class="rounded-3 mb-3">
          <h6>Spot Foto</h6>
          <p class="small text-muted mb-0">Ambil momen terbaik dengan latar sungai & hutan.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Atraksi End -->

  <!-- Harga / Paket Start -->
  <section id="harga">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Paket Tiket</h2>
        <p class="section-subtitle">Harga terjangkau untuk pengalaman seru</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-xl-4">
          <div class="price-card p-4 h-100">
            <h5 class="mb-1">Tiket Masuk</h5>
            <p class="text-muted small mb-3">Area bermain air & gazebo umum</p>
            <h3 class="text-primary mb-3">Rp10.000 <span class="text-muted fs-6">/orang</span></h3>
            <ul class="small text-muted mb-4">
              <li>Toilet & mushola</li>
              <li>Area parkir</li>
            </ul>
            <a href="#kontak" class="btn btn-outline-primary w-100">Tanyakan Info</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="price-card p-4 h-100">
            <h5 class="mb-1">River Tubing</h5>
            <p class="text-muted small mb-3">Peralatan & pemandu disediakan</p>
            <h3 class="text-primary mb-3">Rp35.000 <span class="text-muted fs-6">/orang</span></h3>
            <ul class="small text-muted mb-4">
              <li>Ban, pelampung, helm</li>
              <li>Pemandu lokal</li>
              <li>Durasi ±30–45 menit</li>
            </ul>
            <a href="#kontak" class="btn btn-primary w-100">Reservasi Sekarang</a>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="price-card p-4 h-100">
            <h5 class="mb-1">Sewa Gazebo</h5>
            <p class="text-muted small mb-3">Gazebo keluarga di tepi sungai</p>
            <h3 class="text-primary mb-3">Rp25.000 <span class="text-muted fs-6">/unit</span></h3>
            <ul class="small text-muted mb-4">
              <li>Kapasitas 4–6 orang</li>
              <li>Dekat area bermain</li>
            </ul>
            <a href="#kontak" class="btn btn-outline-primary w-100">Cek Ketersediaan</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Harga End -->

  <!-- Gallery Start -->
<section id="gallery" class="bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Galeri</h2>
      <p class="section-subtitle">Momen terbaik di Cipeudeuy Endah</p>
    </div>

    <div class="row g-4">

      <div class="col-md-4">
        <a href="{{ asset('assets/img/a.jpg') }}" data-lightbox="gallery" class="d-block gallery-item">
          <img src="{{ asset('assets/img/a.jpg') }}" alt="Galeri 1" class="img-fluid rounded-3 mb-3" />
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ asset('assets/img/g.png') }}" data-lightbox="gallery" class="d-block gallery-item">
          <img src="{{ asset('assets/img/g.png') }}" alt="Galeri 2" class="img-fluid rounded-3 mb-3" />
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ asset('assets/img/e.jpg') }}" data-lightbox="gallery" class="d-block gallery-item">
          <img src="{{ asset('assets/img/e.jpg') }}" alt="Galeri 3" class="img-fluid rounded-3 mb-3" />
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ asset('assets/img/f.jpg') }}" data-lightbox="gallery" class="d-block gallery-item">
          <img src="{{ asset('assets/img/f.jpg') }}" alt="Galeri 4" class="img-fluid rounded-3 mb-3" />
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ asset('assets/img/vila.jpg') }}" data-lightbox="gallery" class="d-block gallery-item">
          <img src="{{ asset('assets/img/vila.jpg') }}" alt="Galeri 5" class="img-fluid rounded-3 mb-3" />
        </a>
      </div>

    </div>
  </div>
</section>

  <!-- Gallery End -->

  <!-- Lokasi Start -->
  <section id="lokasi">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="section-title">Lokasi Wisata</h2>
        <p class="section-subtitle">Desa Sindangpano, Kecamatan Rajagaluh, Kabupaten Majalengka</p>
      </div>
      <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
        <!-- Ganti src berikut dengan embed map lokasi tepat Cipeundeuy Endah jika sudah tersedia -->
        <iframe
          src="https://www.google.com/maps?q=Rajagaluh,+Majalengka&output=embed"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- Lokasi End -->

  <!-- Kontak Start -->
  <section id="kontak" class="bg-dark text-light">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h3 class="mb-3">Kontak & Reservasi</h3>
          <p class="text-secondary mb-4">Dikelola oleh Karang Taruna Desa Sindangpano</p>
          <div class="d-flex align-items-start mb-2"><i class="bi bi-geo-alt text-primary me-3"></i><span>Desa Sindangpano, Rajagaluh, Majalengka</span></div>
          <div class="d-flex align-items-start mb-2"><i class="bi bi-telephone text-primary me-3"></i><span>08xx-xxxx-xxxx (Pengelola)</span></div>
          <div class="d-flex align-items-start mb-4"><i class="bi bi-envelope text-primary me-3"></i><span>info@cipeudeuyendah.id</span></div>
          <div class="d-flex gap-2 flex-wrap">
            <a class="btn btn-success" href="#"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
            <a class="btn btn-outline-light" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a>
            <a class="btn btn-outline-light" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kontak End -->

  <!-- Footer Start -->
  <footer class="footer pt-5">
    <div class="container">
      <div class="row g-4 pb-4">
        <div class="col-md-6 col-lg-4">
          <h5 class="text-white mb-3">Cipeundeuy Endah</h5>
          <p class="mb-2">Wisata sungai & river tubing di Majalengka.</p>
          <p class="small mb-0">© <span id="year"></span> Cipeundeuy Endah. All rights reserved.</p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white mb-3">Jam Operasional</h6>
          <ul class="list-unstyled small">
            <li>Senin–Jumat: 09.00 – 16.00</li>
            <li>Sabtu–Minggu & Libur: 08.00 – 17.00</li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white mb-3">Tautan Cepat</h6>
          <ul class="list-unstyled small">
            <li><a href="#about">Tentang</a></li>
            <li><a href="#attractions">Atraksi</a></li>
            <li><a href="#harga">Tiket</a></li>
            <li><a href="#gallery">Galeri</a></li>
            <li><a href="#lokasi">Lokasi</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#home" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- Scripts -->
 <!-- JS Lokal -->
<script src="{{ asset('assets/js/main.js') }}" defer></script>

<!-- CDN (opsional, boleh diganti asset lokal kalau ada di public/lib/) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Libraries (pastikan ada di public/lib/...) -->
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


  <script>
    // Spinner
    window.addEventListener('load', function () {
      document.getElementById('spinner').classList.remove('show');
    });

    // WOW init (if using animate.css classes)
    if (typeof WOW === 'function') new WOW().init();

    // Header carousel
    $(function () {
      $('.header-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 900,
        items: 1,
        dots: true,
        loop: true,
        nav: false,
        autoplayHoverPause: true
      });

      // Attractions carousel
      $('.attractions-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 800,
        margin: 20,
        loop: true,
        dots: false,
        nav: true,
        navText: [
          '<i class="bi bi-arrow-left-circle"></i>',
          '<i class="bi bi-arrow-right-circle"></i>'
        ],
        responsive: { 0: { items: 1 }, 576: { items: 2 }, 992: { items: 3 }, 1200: { items: 4 } }
      });

      // Counter
      if ($('[data-toggle="counter-up"]').length) {
        $('[data-toggle="counter-up"]').counterUp({ delay: 10, time: 2000 });
      }

      // Back to top
      const backToTop = document.querySelector('.back-to-top');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 400) backToTop.style.display = 'inline-flex';
        else backToTop.style.display = 'none';
      });

      // Current year
      document.getElementById('year').textContent = new Date().getFullYear();
    });
  </script>
</body>

</html>