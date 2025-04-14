<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengguna - Admin</title>
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
            <a class="fs-12 nav-link align-items-center" data-bs-toggle="collapse" href="#masterDataMenu" role="button"
                aria-expanded="true" aria-controls="masterDataMenu">Master Data <i class="bi bi-chevron-down"></i></a>
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

            <a href="../admin/pengguna.html" class="fs-12 nav-link active">Pengguna</a>
            <a href="../admin/tenant.html" class="fs-12 nav-link">Tenant</a>
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
        <p class="ps-14 sb grey">Daftar Pengguna Aplikasi</p>
        <!-- card -->
        <div class="card border-0 w-100">
            <div class="card-body bg-white rounded-3">
                <form action="" class="mb-3">
                    <div class="row align-items-center">
                        <!-- Bagian Kiri: Input dan Tombol Cari -->
                        <div class="col-md-6 d-flex">
                            <div class="position-relative me-2 w-198">
                                <i
                                    class="bi bi-search position-absolute top-50 start-10 translate-middle-y text-secondary ms-3"></i>
                                <input type="search" class="form-control rounded-pill ps-5 form-control-sm" id="email"
                                    placeholder="Cari Pengguna">
                            </div>
                            <button type="button" class="btn btn-success w-123 rounded-pill btn-sm"><i
                                    class="bi bi-search pe-2"></i>Cari</button>
                        </div>

                        <!-- Bagian Kanan: Tombol Tambah -->
                        <div class="col-md-6 text-end">
                            <button type="button" class="btn btn-success w-237 rounded-pill btn-tambah btn-sm"
                                data-bs-toggle="modal" data-bs-target="#addpengguna">
                                <i class="bi bi-plus-circle pe-2"></i>Tambah Pengguna
                            </button>
                        </div>
                    </div>
                </form>

                <!-- modal tambah pengguna -->
                <div class="modal fade" id="addpengguna" tabindex="-1" aria-labelledby="addpengguna" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan modal-lg di sini -->
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="addpengguna">Pengguna Baru</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <!-- Kategori Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Kategori Pengguna</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" id="teknik"
                                                    value="Teknik">
                                                <label class="form-check-label black fs-12" for="teknik">Teknik</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="marketing" value="Marketing">
                                                <label class="form-check-label black fs-12"
                                                    for="marketing">Marketing</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="keuangan" value="Keuangan">
                                                <label class="form-check-label black fs-12"
                                                    for="keuangan">Keuangan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="Kepala" value="Kepala">
                                                <label class="form-check-label black fs-12"
                                                    for="Kepala">Kepala</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nama Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nama Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nama Pengguna">
                                        </div>
                                    </div>

                                    <!-- Status Kepegawaian -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Status Kepegawaian</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="pegawai"
                                                    value="Pegawai PT Pulo Mas Jaya">
                                                <label class="form-check-label black fs-12" for="pegawai">Pegawai PT
                                                    Pulo Mas Jaya</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="bukanpegawai" value="Bukan Pegawai PT Pulomas Jaya">
                                                <label class="form-check-label black fs-12" for="bukanpegawai">Bukan
                                                    Pegawai PT Pulomas Jaya</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nomor Induk Pegawai -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Induk Pegawai</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Induk Pegawai">
                                        </div>
                                    </div>

                                    <!-- Nomor Handphone -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Handphone
                                                Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Handphone Pengguna">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Email Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="email" class="form-control w-100" id=""
                                                placeholder="Email Pengguna">
                                        </div>
                                    </div>

                                    <!-- Kata Sandi -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="password" class="form-label black fs-12 mb-0">Kata Sandi</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group input-group-sm">
                                                <input type="password" class="form-control" id="password1" placeholder="Kata Sandi">
                                                <span class="input-group-text bg-white" id="togglePassword1" style="cursor: pointer;">
                                                    <i class="bi bi-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="row align-items-center">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-red w-123 btn-sm rounded-pill text-white me-2"
                                                data-bs-dismiss="modal">
                                                <i class="bi bi-x-circle pe-2"></i>Batal
                                            </button>
                                            <button type="submit" class="btn btn-success w-185 rounded-pill btn-sm">
                                                <i class="bi bi-plus-circle pe-2"></i>Tambah Pengguna
                                            </button>
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
                                <td scope="col" class="w-tb-69">
                                    <p class="fs-12 txt-tb-grey sb m-0">No.</p>
                                </td>
                                <td scope="col">
                                    <p class="fs-12 txt-tb-grey sb m-0">Nama Pengguna Aplikasi</p>
                                </td>
                                <td scope="col">
                                    <p class="fs-12 txt-tb-grey sb m-0">Kategori Pengguna Aplikasi</p>
                                </td>
                                <td scope="col" class="w-tb-239">
                                    <p class="fs-12 txt-tb-grey sb m-0">Aksi</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fs-12 text-center" scope="row">1</td>
                                <td class="fs-12 txt-tb-grey">Toga Siagian</td>
                                <td class="fs-12 txt-tb-grey">Teknik</td>
                                <td class="fs-12 text-center txt-tb-grey">
                                    <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4"
                                        type="button" data-bs-toggle="modal" data-bs-target="#editpengguna"><i
                                            class="bi bi-pencil-fill white"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4"
                                        type="button" data-bs-toggle="modal" data-bs-target="#deletepengguna"><i
                                            class="bi bi-trash3-fill white"></i></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="fs-12 text-center" scope="row">2</td>
                                <td class="fs-12 txt-tb-grey">Ricksan</td>
                                <td class="fs-12 txt-tb-grey">Marketing</td>
                                <td class="fs-12 text-center txt-tb-grey">
                                    <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4"
                                        type="button" data-bs-toggle="modal" data-bs-target="#editpengguna"><i
                                            class="bi bi-pencil-fill white"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4"
                                        type="button" data-bs-toggle="modal" data-bs-target="#deletepengguna"><i
                                            class="bi bi-trash3-fill white"></i></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- modal edit pengguna -->
                <div class="modal fade" id="editpengguna" tabindex="-1" aria-labelledby="editpengguna"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan modal-lg di sini -->
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="editpengguna">Ubah Pengguna</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <!-- Kategori Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Kategori Pengguna</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" id="teknik"
                                                    value="Teknik" checked>
                                                <label class="form-check-label black fs-12" for="teknik">Teknik</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="marketing" value="Marketing">
                                                <label class="form-check-label black fs-12"
                                                    for="marketing">Marketing</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="keuangan" value="Keuangan">
                                                <label class="form-check-label black fs-12"
                                                    for="keuangan">Keuangan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="Kepala" value="Kepala">
                                                <label class="form-check-label black fs-12"
                                                    for="Kepala">Kepala</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nama Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nama Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nama Pengguna" value="Toga Siagian">
                                        </div>
                                    </div>

                                    <!-- Status Kepegawaian -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Status Kepegawaian</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="pegawai"
                                                    value="Pegawai PT Pulo Mas Jaya" checked>
                                                <label class="form-check-label black fs-12" for="pegawai">Pegawai PT
                                                    Pulo Mas Jaya</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="bukanpegawai" value="Bukan Pegawai PT Pulomas Jaya">
                                                <label class="form-check-label black fs-12" for="bukanpegawai">Bukan
                                                    Pegawai PT Pulomas Jaya</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nomor Induk Pegawai -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Induk Pegawai</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Induk Pegawai" value="299873145149076">
                                        </div>
                                    </div>

                                    <!-- Nomor Handphone -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Handphone
                                                Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Handphone Pengguna" value="0819637540">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Email Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="email" class="form-control w-100" id=""
                                                placeholder="Email Pengguna" value="toga.yose@gmail.com">
                                        </div>
                                    </div>

                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="password" class="form-label black fs-12 mb-0">Kata Sandi</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group input-group-sm">
                                                <input type="password" class="form-control" id="password2" placeholder="Kata Sandi" value="123">
                                                <span class="input-group-text bg-white" id="togglePassword2" style="cursor: pointer;">
                                                    <i class="bi bi-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="row align-items-center">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-red w-123 btn-sm rounded-pill text-white me-2"
                                                data-bs-dismiss="modal">
                                                <i class="bi bi-x-circle pe-2"></i>Batal
                                            </button>
                                            <button type="button"
                                                class="btn btn-warning w-185 rounded-pill btn-sm text-white"><i
                                                    class="bi bi-pencil-fill pe-2"></i>Ubah Pengguna</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal hapus pengguna -->
                <div class="modal fade" id="deletepengguna" tabindex="-1" aria-labelledby="deletepengguna"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan modal-lg di sini -->
                        <div class="modal-content rounded-0">
                            <div class="modal-body p-3">
                                <p class="modal-title fs-14 sb grey" id="deletepengguna">Hapus Pengguna</p>
                                <hr style="border: 1px solid #919191;" class="mb-3">
                                <form action="">
                                    <!-- Kategori Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Kategori Pengguna</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" id="teknik"
                                                    value="Teknik" checked disabled>
                                                <label class="form-check-label black fs-12" for="teknik">Teknik</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="marketing" value="Marketing" disabled>
                                                <label class="form-check-label black fs-12"
                                                    for="marketing">Marketing</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="keuangan" value="Keuangan" disabled>
                                                <label class="form-check-label black fs-12"
                                                    for="keuangan">Keuangan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="Kepala" value="Kepala" disabled>
                                                <label class="form-check-label black fs-12"
                                                    for="Kepala">Kepala</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nama Pengguna -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nama Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nama Pengguna" value="Toga Siagian" disabled>
                                        </div>
                                    </div>

                                    <!-- Status Kepegawaian -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label class="form-label black fs-12 mb-0">Status Kepegawaian</label>
                                        </div>
                                        <div class="col-9 d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="pegawai"
                                                    value="Pegawai PT Pulo Mas Jaya" checked disabled>
                                                <label class="form-check-label black fs-12" for="pegawai">Pegawai PT
                                                    Pulo Mas Jaya</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="bukanpegawai" value="Bukan Pegawai PT Pulomas Jaya" disabled>
                                                <label class="form-check-label black fs-12" for="bukanpegawai">Bukan
                                                    Pegawai PT Pulomas Jaya</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nomor Induk Pegawai -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Induk Pegawai</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Induk Pegawai" value="299873145149076" disabled>
                                        </div>
                                    </div>

                                    <!-- Nomor Handphone -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Nomor Handphone
                                                Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="text" class="form-control w-100" id=""
                                                placeholder="Nomor Handphone Pengguna" value="0819637540" disabled>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="" class="form-label black fs-12">Email Pengguna</label>
                                        </div>
                                        <div class="col-9 input-group-sm">
                                            <input type="email" class="form-control w-100" id=""
                                                placeholder="Email Pengguna" value="toga.yose@gmail.com" disabled>
                                        </div>
                                    </div>

                                    <!-- Kata Sandi -->
                                    <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                                        <div class="col-3">
                                            <label for="password" class="form-label black fs-12 mb-0">Kata Sandi</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group input-group-sm">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Kata Sandi" value="12345678" disabled>
                                                <span class="input-group-text bg-white" id="togglePassword"
                                                    style="cursor: pointer;">
                                                    <i class="bi bi-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="fs-12 black mb-0">Apakah Anda yakin akan menghapus data Pengguna berikut ?</p>

                                    </div>
                                    <div class="row align-items-center mt-0">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-outline-danger w-123 btn-sm rounded-pill me-2"
                                                data-bs-dismiss="modal"><i
                                                    class="bi bi-x-circle pe-2"></i>Batal</button>
                                            <button type="button"
                                                class="btn btn-red w-185 rounded-pill btn-sm text-white"><i
                                                    class="bi bi-trash3 pe-2"></i>Hapus Pengguna</button>
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

    <script src="../../assets/js/js-pw.js"></script>
     <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>