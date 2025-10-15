<?php 
	include 'layout/header.php';
	include 'layout/nav.php'; 
	include 'admin/connection.php';
?>
<!-- Hero Section -->
<section class="hero-section py-5 text-white position-relative overflow-hidden" style="margin-top: 60px; background: linear-gradient(135deg, #198754 0%, #2eb872 100%);">
  <div class="container py-5">
    <div class="row align-items-center">
      <!-- Teks Hero -->
      <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
        <h1 class="display-4 fw-bold mb-3">Selamat Datang di <br><span class="text-warning">PPTA Tanwirul Furqan</span></h1>
        <p class="lead mb-4">Membentuk Generasi Qurani, Berilmu, dan Berakhlakul Karimah dengan semangat pembelajaran modern dan berkarakter islami.</p>
        <a href="profil.php" class="btn btn-light btn-lg shadow-sm rounded-pill px-4 py-2 hover-scale">
          <i class="bi bi-book-half me-2"></i> Pelajari Lebih Lanjut
        </a>
      </div>

      <!-- Gambar Hero -->
      <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
        <img src="assets/img/hero-illustration.png" alt="Ilustrasi Pendidikan" class="img-fluid hero-img" style="max-width: 90%;">
      </div>
    </div>
  </div>

  <!-- Ornamen melengkung di bawah -->
  <svg class="position-absolute bottom-0 start-0 w-100" viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
    <path fill="#fff" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,154.7C384,160,480,128,576,128C672,128,768,160,864,154.7C960,149,1056,107,1152,80C1248,53,1344,43,1392,37.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>
</section>

  <!-- Program akademik-->
  <section class="py-5 bg-light position-relative" id="akademik">
  <div class="container text-center">
    <h2 class="fw-bold mb-4 text-success" data-aos="fade-up">Program Akademik</h2>
    <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Menyediakan jenjang pendidikan yang membentuk peserta didik beriman, berilmu, dan berakhlak mulia.
    </p>

    <div class="row g-4">
      <!-- MI -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <a href="akademik//mi.php" class="text-decoration-none text-dark">
          <div class="card border-0 shadow-sm h-100 program-card p-3">
            <div class="icon-circle bg-success bg-opacity-10 text-success mb-3 mx-auto">
              <i class="bi bi-book fs-2"></i>
            </div>
            <h5 class="fw-semibold">Madrasah Ibtidaiyah (MI)</h5>
            <p class="text-muted small">
              Membentuk peserta didik yang beriman, berakhlak mulia, cerdas, dan terampil melalui pembelajaran aktif dan islami.
            </p>
          </div>
        </a>
      </div>

      <!-- MTs -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <a href="akademik/mts.php" class="text-decoration-none text-dark">
          <div class="card border-0 shadow-sm h-100 program-card p-3">
            <div class="icon-circle bg-success bg-opacity-10 text-success mb-3 mx-auto">
              <i class="bi bi-journal-text fs-2"></i>
            </div>
            <h5 class="fw-semibold">Madrasah Tsanawiyah (MTs)</h5>
            <p class="text-muted small">
              Mengembangkan keimanan, ketakwaan, serta kemampuan intelektual dan sosial untuk menjadi generasi Qurani yang unggul.
            </p>
          </div>
        </a>
      </div>

      <!-- PAUD -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <a href="akademik/paud.php" class="text-decoration-none text-dark">
          <div class="card border-0 shadow-sm h-100 program-card p-3">
            <div class="icon-circle bg-success bg-opacity-10 text-success mb-3 mx-auto">
              <i class="bi bi-brush fs-2"></i>
            </div>
            <h5 class="fw-semibold">Pendidikan Anak Usia Dini (PAUD)</h5>
            <p class="text-muted small">
              Pendidikan usia dini berbasis nilai Islam untuk menumbuhkan karakter dan potensi anak sejak dini.
            </p>
          </div>
        </a>
      </div>

      <!-- MTQ -->
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
        <a href="akademik/mtq.php" class="text-decoration-none text-dark">
          <div class="card border-0 shadow-sm h-100 program-card p-3">
            <div class="icon-circle bg-success bg-opacity-10 text-success mb-3 mx-auto">
              <i class="bi bi-mic fs-2"></i>
            </div>
            <h5 class="fw-semibold">Musabaqah Tilawatil Qur’an (MTQ)</h5>
            <p class="text-muted small">
              Membaca Al-Qur’an dengan baik dan benar sesuai kaidah tajwid serta seni bacaan yang indah.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
