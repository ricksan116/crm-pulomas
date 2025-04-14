<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekening - Admin</title>
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
                <a href="../admin/rekening.html" class="fs-12 nav-link active">Rekening</a>
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

    <!-- main -->
     <div class="main-content p-3">
        <p class="ps-14 sb grey">Daftar Rekening Pulomas Office Park</p>
        <!-- card -->
        <div class="card border-0 w-100">
            <div class="card-body bg-white rounded-3">
                <form action="" class="mb-3">
                    <div class="row align-items-center">
                        <!-- Bagian Kiri: Input dan Tombol Cari -->
                        <div class="col-md-6 d-flex">
                            <div class="position-relative me-2 w-198">
                                <i class="bi bi-search position-absolute top-50 start-10 translate-middle-y text-secondary ms-3"></i>
                                <input type="search" class="form-control rounded-pill ps-5 form-control-sm" id="email" placeholder="Cari Rekening">
                            </div>                                        
                            <button type="button" class="btn btn-success w-123 rounded-pill btn-sm"><i class="bi bi-search pe-2"></i>Cari</button>
                        </div>
                
                        <!-- Bagian Kanan: Tombol Tambah -->
                        <div class="col-md-6 text-end">
                            <button type="button" class="btn btn-success w-237 rounded-pill btn-tambah btn-sm" data-bs-toggle="modal" data-bs-target="#addrekening">
                                <i class="bi bi-plus-circle pe-2"></i>Tambah Rekening
                            </button>
                        </div>                                                                        
                    </div>
                </form>   

                <!-- modal tambah rekening -->
                <div class="modal fade" id="addrekening" tabindex="-1" aria-labelledby="addrekening" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="addrekening">Rekening Baru</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">Nama Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="Nama Rekening">
                                        </div>                                        
                                    </div>
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">No. Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="No. Rekening">
                                        </div>                                        
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 d-flex justify-content-end">                           
                                            <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                            <button type="button" class="btn btn-success w-185 rounded-pill btn-sm"><i class="bi bi-plus-circle pe-2"></i>Tambah Rekening</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tabel -->
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-light text-center py-1">
                            <td scope="col" class="w-tb-69"><p class="fs-12 txt-tb-grey sb m-0">No.</p></td>
                            <td scope="col"><p class="fs-12 txt-tb-grey sb m-0">Nama Rekening</p></td>
                            <td scope="col"><p class="fs-12 txt-tb-grey sb m-0">Nomor Rekening</p></td>
                            <td scope="col" class="w-tb-239"><p class="fs-12 txt-tb-grey sb m-0">Aksi</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-12 text-center" scope="row">1</td>
                            <td class="fs-12 txt-tb-grey">BRI</td>
                            <td class="fs-12 txt-tb-grey text-center">9786756387461090980413 </td>
                            <td class="fs-12 text-center txt-tb-grey">
                                <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button" data-bs-toggle="modal" data-bs-target="#editrekening"><i class="bi bi-pencil-fill white"></i></button>
                                <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button" data-bs-toggle="modal" data-bs-target="#deleterekening"><i class="bi bi-trash3-fill white"></i></i></button>
                            </td>
                      </tr>
                      <tr>
                        <td class="fs-12 text-center" scope="row">1</td>
                        <td class="fs-12 txt-tb-grey">Mandiri</td>
                        <td class="fs-12 txt-tb-grey text-center">1310000412348932 </td>
                        <td class="fs-12 text-center txt-tb-grey">
                            <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button" data-bs-toggle="modal" data-bs-target="#editrekening"><i class="bi bi-pencil-fill white"></i></button>
                            <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button" data-bs-toggle="modal" data-bs-target="#deleterekening"><i class="bi bi-trash3-fill white"></i></i></button>
                        </td>
                  </tr>
                  <tr>
                    <td class="fs-12 text-center" scope="row">1</td>
                    <td class="fs-12 txt-tb-grey">Mandiri</td>
                    <td class="fs-12 txt-tb-grey text-center">1310000412348932 </td>
                    <td class="fs-12 text-center txt-tb-grey">
                        <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button" data-bs-toggle="modal" data-bs-target="#editrekening"><i class="bi bi-pencil-fill white"></i></button>
                        <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button" data-bs-toggle="modal" data-bs-target="#deleterekening"><i class="bi bi-trash3-fill white"></i></i></button>
                    </td>
              </tr>
              <tr>
                <td class="fs-12 text-center" scope="row">1</td>
                <td class="fs-12 txt-tb-grey">Mandiri</td>
                <td class="fs-12 txt-tb-grey text-center">1310000412348932 </td>
                <td class="fs-12 text-center txt-tb-grey">
                    <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button" data-bs-toggle="modal" data-bs-target="#editrekening"><i class="bi bi-pencil-fill white"></i></button>
                    <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button" data-bs-toggle="modal" data-bs-target="#deleterekening"><i class="bi bi-trash3-fill white"></i></i></button>
                </td>
          </tr>
          <tr>
            <td class="fs-12 text-center" scope="row">1</td>
            <td class="fs-12 txt-tb-grey">Mandiri</td>
            <td class="fs-12 txt-tb-grey text-center">1310000412348932 </td>
            <td class="fs-12 text-center txt-tb-grey">
                <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button" data-bs-toggle="modal" data-bs-target="#editrekening"><i class="bi bi-pencil-fill white"></i></button>
                <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button" data-bs-toggle="modal" data-bs-target="#deleterekening"><i class="bi bi-trash3-fill white"></i></i></button>
            </td>
      </tr>
                    </tbody>
                </table>
            </div>

                <!-- modal edit rekening -->
                <div class="modal fade" id="editrekening" tabindex="-1" aria-labelledby="editrekeninglabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="editrekening">Ubah Rekening</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">Nama Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="Nama Rekening" value="Mandiri">
                                        </div>                                        
                                    </div>
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">No. Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="No. Rekening" value="1310000412348932">
                                        </div>                                        
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 d-flex justify-content-end">                           
                                            <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                            <button type="button" class="btn btn-warning w-185 rounded-pill btn-sm text-white"><i class="bi bi-pencil-fill pe-2"></i>Ubah Rekening</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal hapus fasilitas -->
                <div class="modal fade" id="deleterekening" tabindex="-1" aria-labelledby="deleterekeninglabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="deleterekening">Hapus Rekening</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">Nama Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="Nama Rekening" value="Mandiri" disabled>
                                        </div>                                        
                                    </div>
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="addRekening Baru" class="form-label black fs-12">No. Rekening</label>
                                        </div>
                                        
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id="addfasilitas" placeholder="No. Rekening" value="1310000412348932" disabled>
                                        </div>                 
                                        <p class="fs-12 black mb-0">Apakah Anda yakin akan menghapus data rekening berikut ?</p>                       
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 d-flex justify-content-end">                           
                                            <button type="button" class="btn btn-outline-danger w-123 btn-sm rounded-pill me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                            <button type="button" class="btn btn-red w-185 rounded-pill btn-sm text-white"><i class="bi bi-trash3 pe-2"></i>Hapus Rekening</button>
                                        </div>
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
