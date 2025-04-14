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
  <div class="main-content p-3">
    <p class="ps-14 sb grey">Ubah Ruangan Pulomas Office Park</p>

    <div class="card border-0 w-100">
      <div class="card-body bg-white rounded-3">
        <p class="modal-title fs-14 sb grey">Harga Sewa Ruangan</p>
        <hr style="border: 1px solid #919191;" class="mb-3" />

        <form>
          <div class="row g-3 mb-3">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Gedung</label>
                <select class="form-select form-select-sm rounded-1">
                  <option>Gedung 1 - Pulomas Office Park</option>
                  <option>Gedung 2 - Pulomas Office Park</option>
                  <option>Gedung 3 - Pulomas Office Park</option>
                </select>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Kode Ruangan</label>
                <input type="text" class="form-control form-control-sm rounded-1" placeholder="Kode Ruangan" value="R01-1001">
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Luas Ruangan</label>
                <div class="input-group input-group-sm">
                  <input type="number" class="form-control rounded-1" placeholder="Luas Ruangan" value="40">
                  <span class="input-group-text rounded-1">m²</span>
                </div>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Deskripsi Ruangan</label>
                <textarea class="form-control form-control-sm rounded-1" rows="3" placeholder="Deskripsi Ruangan">Ruangan Untuk Perkantoran Standart</textarea>
              </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Lantai</label>
                <select class="form-select form-select-sm rounded-1">
                  <option>Lantai 1 - Gedung 1</option>
                  <option>Lantai 2 - Gedung 1</option>
                  <option>Lantai 3 - Gedung 1</option>
                </select>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Ruangan</label>
                <input type="text" class="form-control form-control-sm rounded-1" placeholder="Nama Ruangan" value="Ruangan 001">
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Harga Sewa Lantai</label>
                <div class="input-group input-group-sm">
                  <span class="input-group-text rounded-1">Rp</span>
                  <input type="number" class="form-control rounded-1" value="50.000" />
                  <span class="input-group-text rounded-1">m²/bulan</span>
                </div>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Harga Sewa Ruang</label>
                <div class="input-group input-group-sm">
                  <span class="input-group-text rounded-1">Rp</span>
                  <input type="text" class="form-control rounded-1" value="8.000.000" />
                  <span class="input-group-text rounded-1">m²/bulan</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Fasilitas -->
          <div class="row g-3 mb-2">
            <hr style="border: 1px solid #919191;" class="mb-0" />
            <div class="mb-0">
              <p class="modal-title fs-14 sb grey mt-0">Fasilitas Ruangan</p>
            </div>
            <div class="row g-2 align-items-start">
              <div class="col-md-4 d-flex align-items-start">
                <label class="fs-12 txt-tb-grey mb-0 me-2" style="min-width: 60px;">Fasilitas</label>
                <select class="form-select form-select-sm rounded-1 flex-grow-1">
                  <option selected disabled>Pilih Fasilitas</option>
                  <option>Parkir Gratis</option>
                  <option>Toilet Umum</option>
                </select>
              </div>
              <div class="col-md-8">
                <textarea class="form-control form-control-sm rounded-1" rows="3" placeholder=""></textarea>
              </div>
            </div>
            
          </div>

          <!-- Radio Groups -->
          <div class="mb-3">
            <label class="modal-title fs-14 sb grey">Format Sewa Ruangan</label>
            <div class="d-flex flex-wrap gap-3 fs-12">
              <label><input type="radio" name="format1" class="custom-radio" /> Harian</label>
              <label><input type="radio" name="format1" class="custom-radio" /> Mingguan</label>
              <label><input type="radio" name="format1" class="custom-radio" /> Bulanan</label>
              <label><input type="radio" name="format1" class="custom-radio" /> Tahunan</label>
            </div>
          </div>
          
          <div class="mb-3">
            <label class="modal-title fs-14 sb grey">Kondisi Ruangan</label>
            <div class="d-flex flex-wrap gap-3 fs-12">
              <label><input type="radio" name="format2" class="custom-radio" /> Baik</label>
              <label><input type="radio" name="format2" class="custom-radio" /> Rusak</label>
              <label><input type="radio" name="format2" class="custom-radio" /> Renovasi</label>
            </div>
          </div>
          
          <div class="mb-3">
            <label class="modal-title fs-14 sb grey">Status Ruangan</label>
            <div class="d-flex flex-wrap gap-3 fs-12">
              <label><input type="radio" name="format3" class="custom-radio" /> Tersedia</label>
              <label><input type="radio" name="format3" class="custom-radio" /> Terpakai</label>
              <label><input type="radio" name="format3" class="custom-radio" /> Tidak Tersedia</label>
              <label><input type="radio" name="format3" class="custom-radio" /> Disegel</label>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-4 mb-2">
              <label class="fs-12 txt-tb-grey">Foto Ruangan</label>
              <div class="input-group input-group-sm">
                <input type="file" class="form-control rounded-1" />
                <span class="input-group-text rounded-1">Pilih Foto</span>
              </div>
              <small class="text-muted fs-10">*Format file .jpg, .jpeg, .png</small>
            </div>
            
            <div class="col-md-8 mb-2">
              <label class="form-label fs-12 text-white d-block">&nbsp;</label>
              <textarea class="form-control form-control-sm rounded-1" rows="3"></textarea>
            </div>
          </div>

          <!-- Tombol Aksi -->
          <div class="d-flex justify-content-end mt-2">
           <a class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" href="../admin/ruangan.html"><i class="bi bi-x-circle pe-2"></i>Batal </a>
           <button type="button"
           class="btn btn-warning text-white w-185 rounded-pill btn-sm">
           <i class="bi bi-pencil-fill pe-2"></i>Ubah Ruangan
       </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="../../assets/js/main.js"></script>
</body>
</html>
