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
          <div class="tab-container ">
            <a href="../admin/detailruangan.html" class="tab-link active">Detail Ruangan</a>
            <a href="../admin/posruang.html" class="tab-link">Posisi Ruangan</a>
            <a href="../admin/detailovertime.html" class="tab-link">Overtime</a>
            <a href="../admin/servicecharge.html" class="tab-link">Service Charge</a>
          </div>
          
        <form>
          <div class="row g-3 mb-3">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Gedung</label>
                <select class="form-select form-select-sm rounded-1" disabled>
                  <option>Gedung 1 - Pulomas Office Park</option>
                  <option>Gedung 2 - Pulomas Office Park</option>
                  <option>Gedung 3 - Pulomas Office Park</option>
                </select>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Kode Ruangan</label>
                <input type="text" class="form-control form-control-sm rounded-1" placeholder="Kode Ruangan" value="R01-1001" disabled>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Luas Ruangan</label>
                <div class="input-group input-group-sm">
                  <input type="number" class="form-control rounded-1" placeholder="Luas Ruangan" value="40" disabled>
                  <span class="input-group-text rounded-1">m²</span>
                </div>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Deskripsi Ruangan</label>
                <textarea class="form-control form-control-sm rounded-1" rows="3" placeholder="Deskripsi Ruangan" disabled>Ruangan Untuk Perkantoran Standart</textarea>
              </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Lantai</label>
                <select class="form-select form-select-sm rounded-1" disabled>
                  <option>Lantai 1 - Gedung 1</option>
                  <option>Lantai 2 - Gedung 1</option>
                  <option>Lantai 3 - Gedung 1</option>
                </select>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Nama Ruangan</label>
                <input type="text" class="form-control form-control-sm rounded-1" placeholder="Nama Ruangan" value="Ruangan 001" disabled>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Harga Sewa Lantai</label>
                <div class="input-group input-group-sm">
                  <span class="input-group-text rounded-1">Rp</span>
                  <input type="number" class="form-control rounded-1" value="50.000" disabled>
                  <span class="input-group-text rounded-1">m²/bulan</span>
                </div>
              </div>
              <div class="mb-2">
                <label class="fs-12 txt-tb-grey">Harga Sewa Ruang</label>
                <div class="input-group input-group-sm">
                  <span class="input-group-text rounded-1">Rp</span>
                  <input type="text" class="form-control rounded-1" value="8.000.000" disabled>
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
                <select class="form-select form-select-sm rounded-1 flex-grow-1" disabled>
                  <option selected disabled>Pilih Fasilitas</option>
                  <option>Parkir Gratis</option>
                  <option>Toilet Umum</option>
                </select>
              </div>
              <div class="col-md-8">
                <textarea class="form-control form-control-sm rounded-1" rows="3" placeholder="" disabled></textarea>
              </div>
            </div>
            
          </div>

          <!-- Radio Groups -->
          <div class="mb-0">
            <label class="modal-title fs-14 sb grey">Format Sewa Ruangan</label>
            <div class="col-9 input-group-sm d-flex flex-wrap gap-2 mt-0 mb-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jangkaWaktu" id="harian" checked>
                <label class="form-check-label black fs-12" for="harian">Harian</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jangkaWaktu" id="mingguan">
                <label class="form-check-label black fs-12" for="mingguan">Mingguan</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jangkaWaktu" id="bulanan">
                <label class="form-check-label black fs-12" for="bulanan">Bulanan</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jangkaWaktu" id="tahunan">
                <label class="form-check-label black fs-12" for="tahunan">Tahunan</label>
              </div>
            </div>
            <hr style="border: 1px solid #919191;" class="m-0" />
          </div>
          
          
          <div class="mb-0">
            <label class="modal-title fs-14 sb grey">Kondisi Ruangan</label>
            <div class="col-9 input-group-sm d-flex flex-wrap gap-2 mt-0 mb-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kondisi" id="Baik" checked>
                <label class="form-check-label black fs-12" for="Baik">Baik</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kondisi" id="Rusak">
                <label class="form-check-label black fs-12" for="Rusak">Rusak</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kondisi" id="Renovasi">
                <label class="form-check-label black fs-12" for="Renovasi">Renovasi</label>
              </div>
            </div>
            <hr style="border: 1px solid #919191;" class="m-0" />
          </div>
          
          <div class="mb-0">
            <label class="modal-title fs-14 sb grey">Status Ruangan</label>
            <div class="col-9 input-group-sm d-flex flex-wrap gap-2 mt-0 mb-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="Tersedia" checked>
                <label class="form-check-label black fs-12" for="Tersedia">Tersedia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="Terpakai">
                <label class="form-check-label black fs-12" for="Terpakai">Terpakai</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="Tidak Tersedia">
                <label class="form-check-label black fs-12" for="Tidak Tersedia">Tidak Tersedia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="Disegel">
                <label class="form-check-label black fs-12" for="Disegel">Disegel</label>
              </div>
            </div>
            <hr style="border: 1px solid #919191;" class="m-0" />
          </div>
          
          
          <div class="row">
            <div class="col-md-4 mb-2">
              <label class="fs-12 txt-tb-grey">Foto Ruangan</label>
              <div class="input-group input-group-sm">
                <input type="file" class="form-control rounded-1"  disabled>
                <span class="input-group-text rounded-1">Pilih Foto</span>
              </div>
              <small class="text-muted fs-10">*Format file .jpg, .jpeg, .png</small>
            </div>
            
            <div class="col-md-8 mb-2">
              <label class="form-label fs-12 text-white d-block">&nbsp;</label>
              <textarea class="form-control form-control-sm rounded-1" rows="3"></textarea>
            </div>
            <hr style="border: 1px solid #919191;" class="mb-0" />

            <div class="container">
                <div class="row pt-3">
                  <div class="col">
                         <!-- tabel -->
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-light text-center py-1">
                            <td scope="col" class="w-tb-69"><p class="fs-12 txt-tb-grey sb m-0">No.</p></td>
                            <td scope="col"><p class="fs-12 txt-tb-grey sb m-0">Satuan Waktu</p></td>
                            <td scope="col" class="w-tb-50"><p class="fs-12 txt-tb-grey sb m-0">Harga Sewa</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-12 text-center" scope="row">1</td>
                            <td class="fs-12 txt-tb-grey text-center">! Hari</td>
                            <td class="fs-12 txt-tb-grey text-center">400.000</td>                         
                      </tr>
                        <tr>
                            <td class="fs-12 text-center" scope="row">2</td>
                            <td class="fs-12 txt-tb-grey text-center">2 Hari</td>
                            <td class="fs-12 txt-tb-grey text-center">800.000</td>
                      </tr>
                      <tr>
                        <td class="fs-12 text-center" scope="row">3</td>
                        <td class="fs-12 txt-tb-grey text-center">3 Hari</td>
                        <td class="fs-12 txt-tb-grey text-center">1.200.000</td>
                       
                  </tr>
                    <tr>
                        <td class="fs-12 text-center" scope="row">4</td>
                        <td class="fs-12 txt-tb-grey text-center">4 Hari</td>
                        <td class="fs-12 txt-tb-grey text-center">1.600.000</td>

                  </tr>
                  <tr>
                    <td class="fs-12 text-center" scope="row">5</td>
                    <td class="fs-12 txt-tb-grey text-center">5 Hari</td>
                    <td class="fs-12 txt-tb-grey text-center">2.000.000</td>

              </tr>
                    </tbody>
                </table>
            </div>
                  </div>
                  <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-light text-center py-1">
                                <td scope="col" class="w-tb-69"><p class="fs-12 txt-tb-grey sb m-0">No.</p></td>
                                <td scope="col"><p class="fs-12 txt-tb-grey sb m-0">Satuan Waktu</p></td>
                                <td scope="col" class="w-tb-50"><p class="fs-12 txt-tb-grey sb m-0">Harga Sewa</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fs-12 text-center" scope="row">1</td>
                                <td class="fs-12 txt-tb-grey text-center">! Minggu</td>
                                <td class="fs-12 txt-tb-grey text-center">2.000.000</td>                         
                          </tr>
                            <tr>
                                <td class="fs-12 text-center" scope="row">2</td>
                                <td class="fs-12 txt-tb-grey text-center">2 Minggu</td>
                                <td class="fs-12 txt-tb-grey text-center">4.000.000</td>
                          </tr>
                          <tr>
                            <td class="fs-12 text-center" scope="row">3</td>
                            <td class="fs-12 txt-tb-grey text-center">3 Minggu</td>
                            <td class="fs-12 txt-tb-grey text-center">6.000.000</td>
                           
                      </tr>
                        <tr>
                            <td class="fs-12 text-center" scope="row">4</td>
                            <td class="fs-12 txt-tb-grey text-center">4 Minggu</td>
                            <td class="fs-12 txt-tb-grey text-center">8.000.000</td>

                      </tr>
                        </tbody>
                    </table>
                  </div>
                  <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-light text-center py-1">
                                <td scope="col" class="w-tb-69"><p class="fs-12 txt-tb-grey sb m-0">No.</p></td>
                                <td scope="col"><p class="fs-12 txt-tb-grey sb m-0">Satuan Waktu</p></td>
                                <td scope="col" class="w-tb-50"><p class="fs-12 txt-tb-grey sb m-0">Harga Sewa</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fs-12 text-center" scope="row">1</td>
                                <td class="fs-12 txt-tb-grey text-center">1 Bulan</td>
                                <td class="fs-12 txt-tb-grey text-center">8.000.000</td>   
                          </tr>
                            <tr>
                                <td class="fs-12 text-center" scope="row">2</td>
                                <td class="fs-12 txt-tb-grey text-center">2 Bulan</td>
                                <td class="fs-12 txt-tb-grey text-center">16.000.000</td>
                          </tr>
                          <tr>
                            <td class="fs-12 text-center" scope="row">3</td>
                            <td class="fs-12 txt-tb-grey text-center">3 Bulan</td>
                            <td class="fs-12 txt-tb-grey text-center">24.000.000</td>
                           
                      </tr>
                        <tr>
                            <td class="fs-12 text-center" scope="row">4</td>
                            <td class="fs-12 txt-tb-grey text-center">4 Bulan</td>
                            <td class="fs-12 txt-tb-grey text-center">32.000.000</td>

                      </tr>
                      <tr>
                        <td class="fs-12 text-center" scope="row">5</td>
                        <td class="fs-12 txt-tb-grey text-center">5 Bulan</td>
                        <td class="fs-12 txt-tb-grey text-center">40.000.000</td>   
                  </tr>
                    <tr>
                        <td class="fs-12 text-center" scope="row">6</td>
                        <td class="fs-12 txt-tb-grey text-center">6 Bulan</td>
                        <td class="fs-12 txt-tb-grey text-center">48.000.000</td>
                  </tr>
                  <tr>
                    <td class="fs-12 text-center" scope="row">7</td>
                    <td class="fs-12 txt-tb-grey text-center">7 Bulan</td>
                    <td class="fs-12 txt-tb-grey text-center">56.000.000</td>
                   
              </tr>
                <tr>
                    <td class="fs-12 text-center" scope="row">8</td>
                    <td class="fs-12 txt-tb-grey text-center">8 Bulan</td>
                    <td class="fs-12 txt-tb-grey text-center">64.000.000</td>

              </tr>
              <tr>
                <td class="fs-12 text-center" scope="row">9</td>
                <td class="fs-12 txt-tb-grey text-center">9 Bulan</td>
                <td class="fs-12 txt-tb-grey text-center">72.000.000</td>   
          </tr>
            <tr>
                <td class="fs-12 text-center" scope="row">10</td>
                <td class="fs-12 txt-tb-grey text-center">10 Bulan</td>
                <td class="fs-12 txt-tb-grey text-center">80.000.000</td>
          </tr>
          <tr>
            <td class="fs-12 text-center" scope="row">11</td>
            <td class="fs-12 txt-tb-grey text-center">11 Bulan</td>
            <td class="fs-12 txt-tb-grey text-center">88.000.000</td>
           
      </tr>
        <tr>
            <td class="fs-12 text-center" scope="row">12</td>
            <td class="fs-12 txt-tb-grey text-center">12 Bulan</td>
            <td class="fs-12 txt-tb-grey text-center">96.000.000</td>

      </tr>
                        </tbody>
                    </table>
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
