<?php include 'layout/header.php'; 
	    include 'layout/nav.php'; 
	    include 'admin/connection.php';
?>

<section class="container py-5 mt-5">
  <h2 class="text-center fw-bold mb-4">Berita Terbaru</h2>
  <div class="row">
    <?php
    $berita = [
      ["judul" => "Kegiatan Santri Bulan Maulid", "tanggal" => "12 Oktober 2025", "isi" => "Acara peringatan Maulid Nabi diadakan..."],
      ["judul" => "Lomba Tahfidz Antar Kelas", "tanggal" => "5 Oktober 2025", "isi" => "Santri kelas 2A berhasil menjuarai..."]
    ];
    foreach ($berita as $b) {
      echo "
      <div class='col-md-6 mb-4'>
        <div class='card h-100 shadow-sm'>
          <div class='card-body'>
            <h5 class='card-title'>{$b['judul']}</h5>
            <p class='text-muted small'>{$b['tanggal']}</p>
            <p>{$b['isi']}</p>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>
</section>
<?php include 'layout/footer.php'; ?>
