<?php 
	include 'layout/header.php';
	include 'layout/nav.php'; 
	include 'admin/connection.php';
?>

<section class="py-5 mt-5 text-center bg-light">
  <div class="container">
    <h1 class="fw-bold" data-aos="fade-down">Hubungi Kami</h1>
    <p class="lead" data-aos="fade-up">Kami siap menjawab pertanyaan seputar PPTA Tanwirul Furqan</p>
  </div>
</section>

<section class="container py-5 mt-5 pb-5">
  <div class="row g-4">
    <div class="col-md-6" data-aos="fade-right">
      <h3>Kirim Pesan</h3>
      <form action="kirim_pesan.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Pesan</label>
          <textarea name="pesan" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success px-4">Kirim</button>
      </form>
    </div>

    <div class="col-md-6" data-aos="fade-left">
      <h3>Informasi Kontak</h3>
      <ul class="list-unstyled">
        <li><i class="bi bi-geo-alt-fill text-success"></i> Jl. SMP 3 Gg.Abadi, RT.09/RW.02, Indrasari, Kec. Martapura,Kabupaten Banjar,Kalimantan Selatan 70714.</li>.
        <li><i class="bi bi-telephone-fill text-success"></i> 0882-4229-7899</li>
        <li><i class="bi bi-envelope-fill text-success"></i> info@tanwirulfurqan.sch.id</li>
      </ul>

      <div class="mt-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6563667815076!2d114.87319057473162!3d-3.4335375965409622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681c3afbc5ac3%3A0xf79a12867c68f76!2sPondok%20Pesantren%20Tahfidz%20Al-Qur&#39;an%20Tanwirul%20Furqan!5e0!3m2!1sid!2sus!4v1760338334657!5m2!1sid!2sus" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<?php include 'layout/footer.php'; ?>