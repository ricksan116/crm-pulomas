<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pajak - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="icon" type="image/png" href="../../assets/image/icon.png">
</head>

<body>
  <!-- Sidebar toggle button (mobile) -->
  <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo text-center">
      <img src="../../assets/image/logo.png" alt="" class="pb-4">
    </div>
    <nav class="nav flex-column">
      <a href="../admin/home.html" class="fs-12 nav-link">Dashboard</a>

      <!-- Master Data dropdown -->
      <a class="fs-12 nav-link" data-bs-toggle="collapse" href="#masterDataMenu" role="button" aria-expanded="true" aria-controls="masterDataMenu">
        Master Data <i class="bi bi-chevron-down"></i>
      </a>
      <div class="collapse show ps-3" id="masterDataMenu">
        <a href="../admin/fasilitas.html" class="fs-12 nav-link">Fasilitas</a>
        <a href="../admin/gedung.html" class="fs-12 nav-link">Gedung</a>
        <a href="../admin/lantai.html" class="fs-12 nav-link">Lantai</a>
        <a href="../admin/addservices.html" class="fs-12 nav-link">Add Services</a>
        <a href="../admin/overtime.html" class="fs-12 nav-link">OverTime</a>
        <a href="../admin/ruangan.html" class="fs-12 nav-link">Ruangan</a>
        <a href="../admin/billing.html" class="fs-12 nav-link">Billing</a>
        <a href="../admin/penalti.html" class="fs-12 nav-link ">Penalti</a>
        <a href="../admin/denda.html" class="fs-12 nav-link">Denda</a>
        <a href="../admin/tariflistrik.html" class="fs-12 nav-link">Tarif Listrik</a>
        <a href="../admin/rekening.html" class="fs-12 nav-link">Rekening</a>
        <a href="../admin/pajak.html" class="fs-12 nav-link active">Pajak</a>
        <a href="../admin/materai.html" class="fs-12 nav-link">Materai</a>
      </div>

      <!-- Additional Navigation -->
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

  <!-- Main content -->
  <div class="main-content p-3">
    <p class="ps-14 sb grey">Daftar Pajak Pulomas Office Park</p>

    <div class="card border-0 w-100">
      <div class="card-body bg-white rounded-3">
        <!-- Search and Add Button -->
        <form action="" class="mb-3">
          <div class="row align-items-center">
            <div class="col-md-6 d-flex">
              <div class="position-relative me-2 w-198">
                <i class="bi bi-search position-absolute top-50 start-10 translate-middle-y text-secondary ms-3"></i>
                <input type="search" class="form-control rounded-pill ps-5 form-control-sm" placeholder="Cari Pajak">
              </div>
              <button type="button" class="btn btn-success w-123 rounded-pill btn-sm">
                <i class="bi bi-search pe-2"></i>Cari
              </button>
            </div>
          </div>
        </form>

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr class="table-light text-center py-1">
                <th class="w-tb-69"><p class="fs-12 txt-tb-grey sb m-0">No.</p></th>
                <th><p class="fs-12 txt-tb-grey sb m-0">Nama Pajak</p></th>
                <th><p class="fs-12 txt-tb-grey sb m-0">Persentase Pajak</p></th>
                <th class="w-tb-239"><p class="fs-12 txt-tb-grey sb m-0">Aksi</p></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fs-12 text-center">1</td>
                <td class="fs-12 txt-tb-grey">PPN 10%</td>
                <td class="fs-12 txt-tb-grey">10</td>
                <td class="fs-12 text-center txt-tb-grey">
                  <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-0" data-bs-toggle="modal" data-bs-target="#editpajak">
                    <i class="bi bi-pencil-fill white"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Modals edit Pajak-->
        <div class="modal fade" id="editpajak" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content rounded-0">
                <div class="modal-body p-4">
                  <p class="modal-title fs-14 sb grey mb-2">Ubah Pajak</p>
                  <hr class="mb-3" style="border: 1px solid #919191;">
                  <form>
                    <!-- Nama Pajak -->
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label black fs-12">Nama Pajak</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" placeholder="Nama Pajak" value="Pajak 2022">
                      </div>
                    </div>
          
                    <!-- Persentase Pajak Pajak -->
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label black fs-12">Persentase Pajak</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control form-control-sm" placeholder="Persentase Pajak" value="10">
                        </div>
                      </div>
          
                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-end pt-3">
                      <button type="button" class="btn btn-red btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal" style="width: 123px;">
                        <i class="bi bi-x-circle pe-2"></i>Batal
                      </button>
                      <button type="button" class="btn btn-warning btn-sm rounded-pill text-white" style="width: 185px;">
                        <i class="bi bi-pencil-fill pe-2"></i>Ubah Pajak
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <script src="../../assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
