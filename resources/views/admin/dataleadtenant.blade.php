<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Lead Management - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" type="image/png" href="../../assets/image/icon.png">
</head>
<body>
    <!-- sidebar mobile -->
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo text-center">
            <img src="../../assets/image/logo.png" alt="" class="pb-4">
        </div>
        <nav class="nav flex-column">
            <a href="../admin/home.html" class="fs-12 nav-link">Dashboard</a>

            <!-- Master Data dengan Dropdown -->
            <a class="fs-12 nav-link align-items-center" data-bs-toggle="collapse" href="#masterDataMenu" role="button" aria-expanded="true" aria-controls="masterDataMenu">Master Data <i class="bi bi-chevron-down"></i></a>
            <div class="collapse show ps-3" id="masterDataMenu">
                <a href="../admin/fasilitas.html" class="fs-12 nav-link">Fasilitas</a>
                <a href="../admin/gedung.html" class="fs-12 nav-link">Gedung</a>
                <a href="../admin/lantai.html" class="fs-12 nav-link">Lantai</a>
                <a href="../admin/addservices.html" class="fs-12 nav-link">Add Services</a>
                <a href="../admin/overtime.html" class="fs-12 nav-link">OverTime</a>
                <a href="../admin/ruangan.html" class="fs-12 nav-link">Ruangan</a>
                <a href="../admin/billing.html" class="fs-12 nav-link">Billing</a>
                <a href="../admin/penalti.html" class="fs-12 nav-link">Penalti</a>
                <a href="../admin/denda.html" class="fs-12 nav-link">Denda</a>
                <a href="../admin/tariflistrik.html" class="fs-12 nav-link">Tarif Listrik</a>
                <a href="../admin/rekening.html" class="fs-12 nav-link">Rekening</a>
                <a href="../admin/pajak.html" class="fs-12 nav-link">Pajak</a>
                <a href="../admin/materai.html" class="fs-12 nav-link">Materai</a>
            </div>

            <a href="#" class="fs-12 nav-link">Pengguna</a>
            <a href="#" class="fs-12 nav-link active">Tenant</a>
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

    <!-- main -->
     <div class="main-content p-3">
        <p class="ps-14 sb grey">Daftar Tenant Pulomas Office Park</p>
        <!-- card -->
        <div class="card border-0 w-100">
            <div class="card-body bg-white rounded-3">
              <div class="mb-3 row align-items-center">
                <label for="companyName" class="col-sm-4 fs-14 fw-semibold">Nama Perusahaan / Instansi</label>
                <div class="col-sm-8">
                    <select class="form-select form-select-sm rounded-1" id="businessField">
                      <option selected disabled>Pilih perusahaan / Instansi</option>
                      <option value="1">Perdagangan</option>
                      <option value="2">Jasa</option>
                      <option value="3">Pendidikan</option>
                      <option value="4">Teknologi</option>
                    </select>
                  </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="companyPhone" class="col-sm-4 fs-14 fw-semibold">Nomor Telepon</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm rounded-1" id="companyPhone" placeholder="Nomor Telepon">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="companyEmail" class="col-sm-4 fs-14 fw-semibold">Email Perusahaan</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control form-control-sm rounded-1" id="companyEmail" placeholder="Email Perusahaan">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="companyAddress" class="col-sm-4 fs-14 fw-semibold">Alamat Perusahaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm rounded-1" id="companyAddress" placeholder="Alamat Perusahaan">
                </div>
              </div>
    
              <hr class="my-3" style="border: 1px solid #919191;">
    
              <!-- Penanggung Jawab -->
              <div class="mb-3 row align-items-center">
                <label for="picName" class="col-sm-4 fs-14 fw-semibold">Nama Penanggung Jawab</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm rounded-1" id="picName" placeholder="Nama Penanggung Jawab">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="picPhone" class="col-sm-4 fs-14 fw-semibold">Nomor Telepon</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm rounded-1" id="picPhone" placeholder="Nomor Telepon">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="picEmail" class="col-sm-4 fs-14 fw-semibold">Email Penanggung Jawab</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control form-control-sm rounded-1" id="picEmail" placeholder="Email Penanggung Jawab">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="picAddress" class="col-sm-4 fs-14 fw-semibold">Alamat Penanggung Jawab</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm rounded-1" id="picAddress" placeholder="Alamat Penanggung Jawab">
                </div>
              </div>
    
              <!-- Bidang Usaha -->
              <div class="mb-3 row align-items-center">
                <label for="businessField" class="col-sm-4 fs-14 fw-semibold">Jenis Bidang Usaha</label>
                <div class="col-sm-8">
                  <select class="form-select form-select-sm rounded-1" id="businessField">
                    <option selected disabled>Pilih Jenis Bidang Usaha Perusahaan / Instansi</option>
                    <option>Alat Angkutan Lainnya</option>
                    <option>Barang Galian Bukan Logam</option>
                    <option>Barang - Barang Dari Logam dan Peralatannya</option>
                    <option>Batu Bara, Minyak, Gas Bumi dan Bahan Bakar Dari Nuklir</option>
                    <option>Besi dan Baja</option>
                    <option>Farmasi</option>
                    <option>Forwarding</option>
                    <option>Furniture dan Industri Pengolahan Lainnya</option>
                    <option>Industri Lainnya</option>
                    <option>Industri Properti</option>
                    <option>Jasa</option>
                    <option>Kapal Terbang</option>
                    <option>Karet dan Barang - Barang Dari Plastik</option>
                    <option>Kayu, Barang Dari Kayu dan Anyaman</option>
                    <option>Kendaraan Bermotor</option>
                    <option>Kertas dan Barang Dari Kertas</option>
                    <option>Kimia dan Barang - Barang Dari Bahan Kimia</option>
                    <option>Kulit dan Barang - Barang Dari Kulit</option>
                    <option>Logistik atau Distribusi Barang</option>
                    <option>Makanan dan Minuman</option>
                    <option>Mesin Listrik Lainnya dan Perlengkapannya</option>
                    <option>Mesin dan Perlengkapannya</option>
                    <option>Penerbitan, Percetakan dan Reproduksi</option>
                    <option>Peralatan Kantor, Akuntansi, dan Pengolahan Data</option>
                    <option>Peralatan Kedokteran, Alat Ukur, Navigasi, Optik dan Jam</option>
                    <option>Perkapalan</option>
                    <option>Radio, Televisi dan Alat Komunikasi Lainnya</option>
                    <option>Teknologi Informasi</option>
                    <option>Tekstil</option>
                  </select>
                </div>
              </div>

              <div class="mb-3 row align-items-center">
                <label for="tenantNote" class="col-sm-4"></label>
                <div class="col-sm-8">
                  <textarea class="form-control form-control-sm rounded-1" id="tenantNote" placeholder="" rows="3"></textarea>
                </div>
              </div>
      
              <!-- Status Tenant -->
              <div class="mb-3 row align-items-center">
                <label for="tenantStatus" class="col-sm-4 fs-14 fw-semibold">Status Tenant</label>
                <div class="col-sm-8">
                  <select class="form-select form-select-sm rounded-1" id="tenantStatus">
                    <option selected disabled>Pilih Status Tenant</option>
                    <option value="aktif">Aktif</option>
                    <option value="tidak_aktif">Tidak Aktif</option>
                  </select>
                </div>
              </div>
      
              <div class="mb-3 row align-items-center">
                <label for="tenantNote" class="col-sm-4"></label>
                <div class="col-sm-8">
                  <textarea class="form-control form-control-sm rounded-1" id="tenantNote" placeholder="" rows="3"></textarea>
                </div>
              </div>
              
    
              <hr class="my-3" style="border: 1px solid #919191;">
    
              <!-- Akun -->
              <div class="mb-3 row align-items-center">
                <label for="accountEmail" class="col-sm-4 fs-14 fw-semibold">Email Akun</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control form-control-sm rounded-1" id="accountEmail" placeholder="Email Akun">
                </div>
              </div>
    
              <div class="mb-3 row align-items-center">
                <label for="password" class="col-sm-4 fs-14 fw-semibold">Kata Sandi</label>
                <div class="col-sm-8">
                  <div class="input-group input-group-sm">
                    <input type="password" class="form-control" id="password" placeholder="Kata Sandi Anda">
                    <span class="input-group-text bg-white" id="togglePassword" style="cursor: pointer;">
                      <i class="bi bi-eye"></i>
                    </span>
                  </div>
                </div>
              </div>
    
              <!-- Checkbox -->
              <div class="form-check fs-14 text-secondary mb-3">
                <input class="form-check-input" type="checkbox" id="agreeOffer">
                <label class="form-check-label" for="agreeOffer">
                  Saya bersedia menerima penawaran dari Pulomas Office Park
                </label>
              </div>
    
              <!-- Submit Button -->
              <div class="justify-content-end text-end">
                <button type="button" class="btn btn-success w-185 rounded-pill btn-sm"><i class="bi bi-plus-circle pe-2"></i>Tambah Data Tenant</button>
                <!-- <button type="button" class="btn btn-success w-237 btn-sm">Daftar</button> -->
            </div>
            </div>
        </div>
     </div>
     <script src="../../assets/js/js-pw.js"></script>
     <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
