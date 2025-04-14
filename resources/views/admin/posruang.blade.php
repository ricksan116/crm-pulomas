<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gedung - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="icon" type="image/png" href="../../assets/image/icon.png" />
</head>
<body>
  <!-- sidebar mobile -->
  <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo text-center">
      <img src="../../assets/image/logo.png" alt="" class="pb-4" />
    </div>
    <nav class="nav flex-column">
      <a href="../admin/home.html" class="fs-12 nav-link">Dashboard</a>

      <a class="fs-12 nav-link align-items-center" data-bs-toggle="collapse" href="#masterDataMenu" role="button" aria-expanded="true" aria-controls="masterDataMenu">Master Data <i class="bi bi-chevron-down"></i></a>
      <div class="collapse show ps-3" id="masterDataMenu">
        <a href="../admin/fasilitas.html" class="fs-12 nav-link">Fasilitas</a>
        <a href="../admin/gedung.html" class="fs-12 nav-link">Gedung</a>
        <a href="../admin/lantai.html" class="fs-12 nav-link">Lantai</a>
        <a href="../admin/addservices.html" class="fs-12 nav-link">Add Services</a>
        <a href="../admin/overtime.html" class="fs-12 nav-link">OverTime</a>
        <a href="../admin/ruangan.html" class="fs-12 nav-link active">Ruangan</a>
        <a href="../admin/billing.html" class="fs-12 nav-link">Billing</a>
        <a href="../admin/penalti.html" class="fs-12 nav-link">Penalti</a>
        <a href="../admin/denda.html" class="fs-12 nav-link">Denda</a>
        <a href="../admin/tariflistrik.html" class="fs-12 nav-link">Tarif Listrik</a>
        <a href="../admin/rekening.html" class="fs-12 nav-link">Rekening</a>
        <a href="../admin/pajak.html" class="fs-12 nav-link">Pajak</a>
        <a href="../admin/materai.html" class="fs-12 nav-link">Materai</a>

      </div>
 <a href="#" class="fs-12 nav-link">Pengguna</a>
      <a href="#" class="fs-12 nav-link">Tenant</a>
      <a href="#" class="fs-12 nav-link">Lead Management</a>
      <a href="#" class="fs-12 nav-link">Sewa</a>
      <a href="#" class="fs-12 nav-link">Kontrak</a>
      <a href="#" class="fs-12 nav-link">Billing</a>
      <a href="#" class="fs-12 nav-link">Pembayaran</a>
      <a href="#" class="fs-12 nav-link">Overtime</a>
      <a href="#" class="fs-12 nav-link">Add Service</a>
      <a href="#" class="fs-12 nav-link">Kuesioner</a>
      <a href="#" class="fs-12 nav-link">Email Blast</a>
      <a href="#" class="fs-12 nav-link">Ticket Support</a>
    </nav>
  </div>

  <!-- Main Content -->
   <div class="container"></div>
  <div class="main-content p-3">
    <p class="ps-14 sb grey">Detail Ruangan 001 / Lantai 1 - Gedung 1 / Gedung 1 - Pulomas Office Park</p>

    <div class="card border-0 w-100">
      <div class="card-body bg-white rounded-3">
          <!-- Tabs -->
          <div class="tab-container">
            <a href="../admin/detailruangan.html" class="tab-link ">Detail Ruangan</a>
            <a href="../admin/posruang.html" class="tab-link active">Posisi Ruangan</a>
            <a href="../admin/detailovertime.html" class="tab-link">Overtime</a>
            <a href="../admin/servicecharge.html" class="tab-link">Service Charge</a>
          </div>
          
        <form>
          <div class="row g-3 mb-3 pt-3">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="mb-3">
                <div class="row mb-2 align-items-center ">
                    <div class="col-3">
                        <label class="form-label black fs-12">Depan</label>
                    </div>
                    <div class="col-9">
                        <select class="form-select form-select-sm rounded-1" id="">
                            <option >Pilih Gedung</option>
                            <option selected>Jalan Selasar - 1</option>
                            <option >Gedung B</option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="row mb-2 align-items-center">
                <div class="col-3">
                    <label class="form-label black fs-12">Kanan</label>
                </div>
                <div class="col-9">
                    <select class="form-select form-select-sm rounded-1" id="">
                        <option >Pilih Gedung</option>
                        <option selected>Ruangan 002</option>
                        <option >Gedung B</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
                <div class="mb-3">
                  <div class="row mb-2 align-items-center ">
                      <div class="col-3">
                          <label class="form-label black fs-12">Belakang</label>
                      </div>
                      <div class="col-9">
                          <select class="form-select form-select-sm rounded-1" id="">
                              <option >Pilih Gedung</option>
                              <option selected>Tembok</option>
                              <option>Gedung B</option>
                          </select>
                      </div>
                  </div>
                </div>
                <div class="row mb-2 align-items-center">
                  <div class="col-3">
                      <label class="form-label black fs-12">Kiri</label>
                  </div>
                  <div class="col-9">
                      <select class="form-select form-select-sm rounded-1" id="">
                          <option >Pilih Gedung</option>
                          <option selected>Tembok</option>
                          <option>Gedung B</option>
                      </select>
                  </div>
              </div>
              </div>
          </div>

          <!-- Denah -->
          <div class="row g-2 mb-0">
            <hr style="border: 1px solid #919191;" class="mb-0" />
            <div class="mb-0">
              <p class="fs-14 sb grey ">Foto Denah</p>
            </div>
           <img src="../../assets/image/denah.png" style="width: 200px;" alt="">
           <hr style="border: 1px solid #919191;" class="mb-0" />

          </div>

          <!-- Radio Groups -->
          <div class="mb-3">
            <label class="fs-14 sb grey mb-2">Foto Ruangan</label>
            <div class="container">
              <div class="row">
                <!-- Kolom kiri (2 gambar vertikal) -->
                <div class="col-md-6 d-flex flex-column gap-3">
                  <img src="../../assets/image/ruang 2 (1).png" class="img-fluid" alt="Ruangan 1">
                  <img src="../../assets/image/ruang 2 (2).png" class="img-fluid" alt="Ruangan 2">
                </div>
                <!-- Kolom kanan (2 gambar horizontal) -->
                <div class="col-md-6">
                  <div class="row mb-3">
                    <div class="col-12">
                      <img src="../../assets/image/ruang 2 (3).png" class="img-fluid" alt="Ruangan 3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <img src="../../assets/image/ruang 2 (4).png" class="img-fluid" alt="Ruangan 4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="../../assets/js/main.js"></script>
</body>
</html>
