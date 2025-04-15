@extends('admin.layouts.app')

@section('content')


  <!-- main -->
  <div class="main-content p-3">
    <p class="ps-14 sb grey">Daftar OverTime Pulomas Office Park</p>
    <!-- card -->
    <div class="card border-0 w-100">
      <div class="card-body bg-white rounded-3">
        <form action="" class="mb-3">
          <div class="row align-items-center">
            <!-- Bagian Kiri: Input dan Tombol Cari -->
            <div class="col-md-6 d-flex">
              <div class="position-relative me-2 w-198">
                <i class="bi bi-search position-absolute top-50 start-10 translate-middle-y text-secondary ms-3"></i>
                <input type="search" class="form-control rounded-pill ps-5 form-control-sm" id="email"
                  placeholder="Cari Overtime">
              </div>
              <button type="button" class="btn btn-success w-123 rounded-pill btn-sm"><i
                  class="bi bi-search pe-2"></i>Cari</button>
            </div>

            <!-- Bagian Kanan: Tombol Tambah -->
            <div class="col-md-6 text-end">
              <button type="button" class="btn btn-success w-237 rounded-pill btn-tambah btn-sm" data-bs-toggle="modal"
                data-bs-target="#addovertime">
                <i class="bi bi-plus-circle pe-2"></i>Tambah OverTime
              </button>
            </div>
          </div>
        </form>

        <!-- Modal Tambah Overtime -->
        <div class="modal fade" id="addovertime" tabindex="-1" aria-labelledby="addovertimeLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="addovertimeLabel">Tambah Overtime</p>
                <hr class="mb-3" style="border: 1px solid #919191;">
        
                <form action="">
                  <!-- Nama Overtime -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Nama Overtime</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jangkaWaktu" id="once" value="Diatas">
                        <label class="form-check-label black fs-12" for="once">Diatas</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jangkaWaktu" id="term" value="Dibawah">
                        <label class="form-check-label black fs-12" for="term">Dibawah</label>
                      </div>
                    </div>
                  </div>
        
                  <!-- Durasi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Durasi</label>
                    </div>
                    <div class="col-9 input-group-sm d-flex gap-2">
                      <input type="text" class="form-control form-control-sm" placeholder="Total Durasi" style="width: 40%;">
                      <select class="form-select form-select-sm" style="width: 60%;">
                        <option selected disabled>Pilih Satuan Durasi</option>
                        <option>Menit</option>
                        <option>Jam</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="text" class="form-control w-100" placeholder="Satuan Services">
                    </div>
                  </div>
        
                  <!-- Harga Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12 mb-0">Harga Satuan</label>
                    </div>
                    <div class="col-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Harga Satuan" aria-label="Harga Satuan">
                      </div>
                    </div>
                  </div>
        
                  <!-- Total Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Total Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="text" class="form-control" placeholder="Total Jangka Waktu">
                    </div>
                  </div>
        
                  <!-- Satuan Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select">
                        <option selected>Pilih Jangka Waktu</option>
                        <option>Hari</option>
                        <option>Minggu</option>
                        <option>Bulan</option>
                        <option>Tahun</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Jenis Pembayaran -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Jenis Pembayaran</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select">
                        <option selected disabled>Pilih Jenis Pembayaran</option>
                        <option >Debit</option>
                        <option >Kredit</option>

                      </select>
                    </div>
                  </div>
        
                  <!-- Deskripsi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Deskripsi</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <textarea class="form-control" rows="2" placeholder="Deskripsi Overtime"></textarea>
                    </div>
                  </div>
        
                  <!-- Tombol -->
                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end">
                      <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle pe-2"></i>Batal
                      </button>
                      <button type="button" class="btn btn-success w-185 rounded-pill btn-sm">
                        <i class="bi bi-plus-circle pe-2"></i>Tambah Overtime
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
                  <p class="fs-12 txt-tb-grey sb m-0">Nama Overtime</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Satuan</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Harga Satuan</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Jangka Waktu</p>
                </td>
                <td scope="col" class="w-tb-239">
                  <p class="fs-12 txt-tb-grey sb m-0">Aksi</p>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fs-12 text-center" scope="row">1</td>
                <td class="fs-12 txt-tb-grey text-">Dibawah 4 Jam</td>
                <td class="fs-12 txt-tb-grey text-center">/ Pemakaian</td>
                <td class="fs-12 txt-tb-grey text-center">15.0000</td>
                <td class="fs-12 txt-tb-grey text-center">Bulanan</td>
                <td class="fs-12 text-center txt-tb-grey">
                  <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#editovertime"><i
                      class="bi bi-pencil-fill white"></i></button>
                  <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#deleteovertime"><i
                      class="bi bi-trash3-fill white"></i></i></button>
                </td>
              </tr>
              <tr>
                <td class="fs-12 text-center" scope="row">2</td>
                <td class="fs-12 txt-tb-grey text-">Diatas 4 Jam</td>
                <td class="fs-12 txt-tb-grey text-center">/ Pemakaian</td>
                <td class="fs-12 txt-tb-grey text-center">10.0000</td>
                <td class="fs-12 txt-tb-grey text-center">Bulanan</td>
                <td class="fs-12 text-center txt-tb-grey">
                  <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#editovertime"><i
                      class="bi bi-pencil-fill white"></i></button>
                  <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#deleteovertime"><i
                      class="bi bi-trash3-fill white"></i></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- modal edit Overtime -->
        <div class="modal fade" id="editovertime" tabindex="-1" aria-labelledby="editovertimeLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="editovertimeLabel">Ubah Overtime</p>
                <hr class="mb-3" style="border: 1px solid #919191;">
        
                <form action="">
                  <!-- Nama Overtime -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Nama Overtime</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input " type="radio" name="jangkaWaktu" id="once" value="Diatas">
                        <label class="form-check-label black fs-12" for="once">Diatas</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jangkaWaktu" id="term" value="Dibawah">
                        <label class="form-check-label black fs-12" for="term">Dibawah</label>
                      </div>
                    </div>
                  </div>
        
                  <!-- Durasi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Durasi</label>
                    </div>
                    <div class="col-9 input-group-sm d-flex gap-2">
                      <input type="text" class="form-control form-control-sm" placeholder="Total Durasi" value="4" style="width: 40%;">
                      <select class="form-select form-select-sm" style="width: 60%;">
                        <option>Jam</option>
                        <option>Menit</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="text" class="form-control w-100" placeholder="Satuan Services">
                    </div>
                  </div>
        
                  <!-- Harga Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12 mb-0">Harga Satuan</label>
                    </div>
                    <div class="col-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Harga Satuan" aria-label="Harga Satuan" value="15.000">
                      </div>
                    </div>
                  </div>
        
                  <!-- Total Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Total Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="number" class="form-control" placeholder="Total Jangka Waktu" value="1">
                    </div>
                  </div>
        
                  <!-- Satuan Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select">
                        <option>Hari</option>
                        <option>Minggu</option>
                        <option selected>Bulan</option>
                        <option>Tahun</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Jenis Pembayaran -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Jenis Pembayaran</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select">
                        <!-- <option >Pilih Jenis Pembayaran</option> -->
                        <option selected >Debit</option>
                        <option >Kredit</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Deskripsi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Deskripsi</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <textarea class="form-control" rows="2" placeholder="Deskripsi Overtime">Overtime dikenakan untuk tenant yang memakai ruangan dibawah 4 jam saat diluat jam dan hari kerja</textarea>
                    </div>
                  </div>
        
                  <!-- Tombol -->
                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end">
                      <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle pe-2"></i>Batal
                      </button>
                      <button type="button" class="btn btn-warning w-185 rounded-pill btn-sm text-white"><i class="bi bi-pencil-fill pe-2"></i>Ubah Overtime</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
        

        <!-- modal hapus overtime -->
        <div class="modal fade" id="deleteovertime" tabindex="-1" aria-labelledby="deleteovertimeLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="deleteovertimeLabel">Hapus Overtime</p>
                <hr class="mb-3" style="border: 1px solid #919191;">
        
                <form action="">
                  <!-- Nama Overtime -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Nama Overtime</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input " type="radio" name="jangkaWaktu" id="once" value="Diatas">
                        <label class="form-check-label black fs-12" for="once">Diatas</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jangkaWaktu" id="term" value="Dibawah">
                        <label class="form-check-label black fs-12" for="term">Dibawah</label>
                      </div>
                    </div>
                  </div>
        
                  <!-- Durasi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Durasi</label>
                    </div>
                    <div class="col-9 input-group-sm d-flex gap-2">
                      <input type="text" class="form-control form-control-sm" placeholder="Total Durasi" value="4" style="width: 40%;" disabled>
                      <select class="form-select form-select-sm" style="width: 60%;" disabled>
                        <option>Jam</option>
                        <option>Menit</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="text" class="form-control w-100" placeholder="Satuan Services">
                    </div>
                  </div>
        
                  <!-- Harga Satuan -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12 mb-0">Harga Satuan</label>
                    </div>
                    <div class="col-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Harga Satuan" aria-label="Harga Satuan" value="15.000" disabled>
                      </div>
                    </div>
                  </div>
        
                  <!-- Total Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Total Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <input type="number" class="form-control" placeholder="Total Jangka Waktu" value="1" disabled>
                    </div>
                  </div>
        
                  <!-- Satuan Jangka Waktu -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Satuan Jangka Waktu</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select" disabled>
                        <option>Bulan</option>
                        <option>Tahun</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Jenis Pembayaran -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Jenis Pembayaran</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <select class="form-select" disabled>
                        <!-- <option >Pilih Jenis Pembayaran</option> -->
                        <option >Debit</option>
                        <option >Kredit</option>
                      </select>
                    </div>
                  </div>
        
                  <!-- Deskripsi -->
                  <div class="row g-2 align-items-center mb-3 ms-1 me-1">
                    <div class="col-3">
                      <label class="form-label black fs-12">Deskripsi</label>
                    </div>
                    <div class="col-9 input-group-sm">
                      <textarea class="form-control" rows="2" placeholder="Deskripsi Overtime" disabled>Overtime dikenakan untuk tenant yang memakai ruangan dibawah 4 jam saat diluat jam dan hari kerja</textarea>
                    </div>
                    <p class="fs-12 black mb-0">Apakah Anda yakin akan menghapus data overtime berikut ?</p>

                  </div>
        
                  <!-- Tombol -->
                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end">
                      <button type="button" class="btn btn-outline-danger w-123 btn-sm rounded-pill me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                            <button type="button" class="btn btn-red w-185 rounded-pill btn-sm text-white"><i class="bi bi-trash3 pe-2"></i>Hapus Overtime</button>
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

  <script src="{{ asset("assets/js/main.js") }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection