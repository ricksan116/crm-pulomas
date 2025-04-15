@extends('admin.layouts.app')

@section('content')

  <!-- main -->
  <div class="main-content p-3">
    <p class="ps-14 sb grey">Daftar Tarif Listrik Pulomas Office Park</p>
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
                  placeholder="Cari Jenis Tarif">
              </div>
              <button type="button" class="btn btn-success w-123 rounded-pill btn-sm"><i
                  class="bi bi-search pe-2"></i>Cari</button>
            </div>

            <!-- Bagian Kanan: Tombol Tambah -->
            <div class="col-md-6 text-end">
              <button type="button" class="btn btn-success w-237 rounded-pill btn-tambah btn-sm" data-bs-toggle="modal"
                data-bs-target="#addtariflistrik">
                <i class="bi bi-plus-circle pe-2"></i>Tambah Tarif Listrik
              </button>
            </div>
          </div>
        </form>

        <!-- modal tambah Fasilitas -->
        <div class="modal fade" id="addtariflistrik" tabindex="-1" aria-labelledby="addtariflistrik" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="addtariflistrik">Tarif Listrik Baru</p>
                <hr style="border: 1px solid #919191;" class="mb-3">
                <form action="">

                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Jenis Tarif Listrik</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas"
                        placeholder="Jenis Tarif Listrik">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Daya</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Daya">
                        <span class="input-group-text centered-addon" style="width: 60px;">VA</span>
                      </div>
                    </div>
                  </div>

                  <!-- Tarif -->
                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Tarif</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas" placeholder="Tarif">
                    </div>
                  </div>

                  <!-- Tarif Dasar/LWBP (disamakan kolomnya jadi col-sm-3 dan col-sm-9) -->
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Tarif Dasar/LWBP</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Tarif Dasar/LWBP" >
                      </div>
                    </div>
                  </div>

                  <div class="mb-1 row">
                    <label class="col-sm-3 col-form-label black fs-12">BPJU/Pajak Penerangan</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="BPJU/Pajak Penerangan">
                        <span class="input-group-text centered-addon" style="width: 60px;">%</span>
                      </div>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">KWH Minimum</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="KWH Minimum" >
                        <span class="input-group-text centered-addon" style="width: 100px;">KWH/Bulan</span>
                      </div>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end mt-2" >
                      <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2"
                        data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                      <button type="button" class="btn btn-success w-185 rounded-pill btn-sm"><i
                          class="bi bi-plus-circle pe-2"></i>Tambah Tarif Listrik</button>
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
                  <p class="fs-12 txt-tb-grey sb m-0">Jenis Tarif</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Daya</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Tarif</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">Tari Dasar/LWBP</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">BPJU/Pajak Penerangan</p>
                </td>
                <td scope="col">
                  <p class="fs-12 txt-tb-grey sb m-0">KWH Minimum/Bulan</p>
                </td>
                <td scope="col" class="w-tb-239">
                  <p class="fs-12 txt-tb-grey sb m-0">Aksi</p>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fs-12 text-center" scope="row">1</td>
                <td class="fs-12 txt-tb-grey">AC</td>
                <td class="fs-12 txt-tb-grey text-center">2200 VA</td>
                <td class="fs-12 txt-tb-grey text-center">B.2</td>
                <td class="fs-12 txt-tb-grey text-center">Rp. 1520</td>
                <td class="fs-12 txt-tb-grey text-center">3%</td>
                <td class="fs-12 txt-tb-grey text-center">1056 KWH</td>
                <td class="fs-12 text-center txt-tb-grey">
                  <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#edittariflistrik"><i
                      class="bi bi-pencil-fill white"></i></button>
                  <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#deletetariflistrik"><i
                      class="bi bi-trash3-fill white"></i></i></button>
                </td>
              </tr>
              <tr>
                <td class="fs-12 text-center" scope="row">2</td>
                <td class="fs-12 txt-tb-grey">Penerangan</td>
                <td class="fs-12 txt-tb-grey text-center">8800 VA</td>
                <td class="fs-12 txt-tb-grey text-center">1524</td>
                <td class="fs-12 txt-tb-grey text-center">Rp. 1524</td>
                <td class="fs-12 txt-tb-grey text-center">3%</td>
                <td class="fs-12 txt-tb-grey text-center">325 KWH</td>
                <td class="fs-12 text-center txt-tb-grey">
                  <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#edittariflistrik"><i
                      class="bi bi-pencil-fill white"></i></button>
                  <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                    data-bs-toggle="modal" data-bs-target="#deletetariflistrik"><i
                      class="bi bi-trash3-fill white"></i></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- modal edit Fasilitas -->
        <div class="modal fade" id="edittariflistrik" tabindex="-1" aria-labelledby="edittariflistrik" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="edittariflistrik">Ubah Tarif Listrik</p>
                <hr style="border: 1px solid #919191;" class="mb-3">
                <form action="">

                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Jenis Tarif Listrik</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas" value="AC"
                        placeholder="Jenis Tarif Listrik">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Daya</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Daya" value="3300">
                        <span class="input-group-text centered-addon" style="width: 60px;">VA</span>
                      </div>
                    </div>
                  </div>

                  <!-- Tarif -->
                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Tarif</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas" placeholder="Tarif" value="B.2">
                    </div>
                  </div>

                  <!-- Tarif Dasar/LWBP (disamakan kolomnya jadi col-sm-3 dan col-sm-9) -->
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Tarif Dasar/LWBP</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Tarif Dasar/LWBP" value="1520">
                      </div>
                    </div>
                  </div>

                  <div class="mb-1 row">
                    <label class="col-sm-3 col-form-label black fs-12">BPJU/Pajak Penerangan</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="BPJU/Pajak Penerangan" value="3">
                        <span class="input-group-text centered-addon" style="width: 60px;">%</span>
                      </div>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">KWH Minimum</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="KWH Minimum" value="1056">
                        <span class="input-group-text centered-addon" style="width: 100px;">KWH/Bulan</span>
                      </div>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end mt-2" >
                      <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2"
                        data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                        <button type="button" class="btn btn-warning w-185 rounded-pill btn-sm text-white"><i class="bi bi-pencil-fill pe-2"></i>Ubah Tarif Listrik</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- modal hapus fasilitas -->
        <div class="modal fade" id="deletetariflistrik" tabindex="-1" aria-labelledby="deletetariflistrik" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
              <div class="modal-body p-3">
                <p class="modal-title fs-14 sb grey" id="deletetariflistrik">Hapus Tarif Listrik</p>
                <hr style="border: 1px solid #919191;" class="mb-3">
                <form action="">

                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Jenis Tarif Listrik</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas" value="AC" disabled
                        placeholder="Jenis Tarif Listrik">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Daya</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Daya" value="3300" disabled>
                        <span class="input-group-text centered-addon" style="width: 60px;">VA</span>
                      </div>
                    </div>
                  </div>

                  <!-- Tarif -->
                  <div class="mb-3 row">
                    <label for="addfasilitas" class="col-sm-3 col-form-label black fs-12">Tarif</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="addfasilitas" placeholder="Tarif" value="B.2" disabled>
                    </div>
                  </div>

                  <!-- Tarif Dasar/LWBP (disamakan kolomnya jadi col-sm-3 dan col-sm-9) -->
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">Tarif Dasar/LWBP</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" placeholder="Tarif Dasar/LWBP" value="1520" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="mb-1 row">
                    <label class="col-sm-3 col-form-label black fs-12">BPJU/Pajak Penerangan</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="BPJU/Pajak Penerangan" value="3" disabled>
                        <span class="input-group-text centered-addon" style="width: 60px;">%</span>
                      </div>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label black fs-12">KWH Minimum</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="KWH Minimum" value="1056" disabled>
                        <span class="input-group-text centered-addon" style="width: 100px;">KWH/Bulan</span>
                      </div>
                    </div>
                    <p class="fs-12 black mb-0">Apakah Anda yakin akan menghapus data fasilitas berikut ?</p>

                  </div>

                  <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-end mt-2" >
                      <div class="col-md-12 d-flex justify-content-end">                           
                        <button type="button" class="btn btn-outline-danger w-123 btn-sm rounded-pill me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                        <button type="button" class="btn btn-red w-185 rounded-pill btn-sm text-white"><i class="bi bi-trash3 pe-2"></i>Hapus Tarif Listrik</button>
                    </div>

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