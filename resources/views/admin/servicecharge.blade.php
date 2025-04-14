<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gedung - Admin</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="icon" type="image/png" href="../../assets/image/icon.png" />
</head>
<body>
  <!-- Sidebar Toggle (Mobile) -->
  <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo text-center">
      <img src="../../assets/image/logo.png" alt="Logo" class="pb-4" />
    </div>
    <nav class="nav flex-column">
      <a href="../admin/home.html" class="fs-12 nav-link">Dashboard</a>

      <a class="fs-12 nav-link align-items-center" data-bs-toggle="collapse" href="#masterDataMenu" role="button" aria-expanded="true" aria-controls="masterDataMenu">
        Master Data <i class="bi bi-chevron-down"></i>
      </a>
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
            <a href="../admin/posruang.html" class="tab-link">Posisi Ruangan</a>
            <a href="../admin/detailovertime.html" class="tab-link">Overtime</a>
            <a href="../admin/servicecharge.html" class="tab-link active">Service Charge</a>
        </div>

        <!-- Form -->
        <form>
          <div class="row g-3 mb-3">
            <!-- Left Column -->
            <div class="col-md-7 pt-3">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-light text-center py-1">
                      <td scope="col" class="w-tb-69">
                        <p class="fs-12 txt-tb-grey sb m-0">No.</p>
                      </td>
                      <td scope="col">
                        <p class="fs-12 txt-tb-grey sb m-0">Jenis Service Charge</p>
                      </td>
                      <td scope="col">
                        <p class="fs-12 txt-tb-grey sb m-0">Harga Satuan (/m²)</p>
                      </td>
                      <td scope="col">
                        <p class="fs-12 txt-tb-grey sb m-0">Total Harga</p>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="fs-12 text-center" scope="row">1</td>
                      <td class="fs-12 txt-tb-grey">Service Charger - Termasuk Listrik</td>
                      <td class="fs-12 txt-tb-grey text-center">58.000</td>
                      <td class="fs-12 txt-tb-grey text-center">400.000</td>
                    </tr>
                    <tr>
                      <td class="fs-12 text-center" scope="row">2</td>
                      <td class="fs-12 txt-tb-grey">Service Charger - Listrik Sendiri</td>
                      <td class="fs-12 txt-tb-grey text-center">50.000</td>
                      <td class="fs-12 txt-tb-grey text-center">320.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>              
            </div>

            <!-- Right Column -->
            <div class="col-md-5">
              <!-- Kosong untuk saat ini -->
            </div>
          </div>

          <!-- Divider -->
          <hr style="border: 1px solid #919191;" class="mb-0" />
        </form>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="../../assets/js/main.js"></script>
</body>
</html>
