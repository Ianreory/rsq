<?php include 'header.php'; ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Layanan</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Layanan</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Bagian Fitur ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>Fitur</h2>
        <p>Cek oksimeter secara online</p>
      </div>
      <div style="justify-content: center;display: flex;">
        <div class="card text-center" style="width: 50%">
          <div class="card-header" style="font-size: 30px; font-weight: bold; background-color: red;">
            Saturasi Oksigen
          </div>
          <div class="card-body">
            <h1><font-weight:bold></font-weight:bold>95% <span style="font-size:20px"></span> </h1>
          </div>
          <!-- Pindahkan footer status di bawah 50 bpm -->
          <div class="card-footer">
            Status: Rendah
            <div class="text-center">
              <button id="resetButton" class="btn btn-danger">Reset</button>
              <button id="mulaiButton" class="btn btn-primary">Mulai</button>
              
            </div>
          </div>
          <div class="icon box"></div>
        </div>
      </div>
    </div>
  </section><!-- End Bagian Fitur -->
</main><!-- End #main -->
<?php include 'footer.php'; ?>
  </section><!-- End Bagian Fitur -->
</main><!-- End #main -->
<?php include 'footer.php'; ?>
