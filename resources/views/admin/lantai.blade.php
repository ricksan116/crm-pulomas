@extends('admin.layouts.app')

@section('content')
    


 <!-- main -->
 <div class="main-content p-3">
     <p class="ps-14 sb grey">Daftar Lantai Pulomas Office Park</p>
     <!-- card -->
     <div class="card border-0 w-100">
         <div class="card-body bg-white rounded-3">
             <form action="" class="mb-3">
                 <div class="row align-items-center">
                     <!-- Bagian Kiri: Input dan Tombol Cari -->
                     <div class="col-md-6 d-flex">
                         <div class="position-relative me-2 w-198">
                             <i
                                 class="bi bi-search position-absolute top-50 start-10 translate-middle-y text-secondary ms-3 form-control-sm"></i>
                             <input type="search" class="form-control rounded-pill ps-5 form-control-sm" id="search"
                                 placeholder="Cari Lantai">
                         </div>
                         <button type="button" class="btn btn-success w-123 rounded-pill btn-sm"><i
                                 class="bi bi-search pe-2"></i>Cari</button>
                     </div>

                     <!-- Bagian Kanan: Tombol Tambah -->
                     <div class="col-md-6 text-end">
                         <button type="button" class="btn btn-success w-237 rounded-pill btn-tambah btn-sm"
                             data-bs-toggle="modal" data-bs-target="#addlantai">
                             <i class="bi bi-plus-circle pe-2"></i>Tambah Lantai
                         </button>
                     </div>
                 </div>
             </form>

             <!-- Modal Tambah Lantai -->
             <div class="modal fade" id="addlantai" tabindex="-1" aria-labelledby="addlantaiLabel"
                 aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content rounded-0">
                         <div class="modal-body p-3">
                             <p class="modal-title fs-14 sb grey" id="addlantaiLabel">Lantai Baru</p>
                             <hr style="border: 1px solid #919191;" class="mb-3">

                             <form>
                                 <!-- Nama Gedung -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label for="addgedung" class="form-label black fs-12">Nama Gedung</label>
                                     </div>
                                     <div class="col-9">
                                         <select class="form-select form-select-sm" id="namaGedung">
                                             <option >Pilih Gedung</option>
                                             <option >Gedung 1 - Pulomas Office Park</option>
                                             <option >Gedung 2 - Pulomas Office Park</option>
                                             <option >Gedung 3 - Pulomas Office Park</option>
                                             <option >Gedung 4 - Pulomas Office Park</option>
                                             <option >Gedung 5 - Pulomas Office Park</option>
                                             <option >Gedung 6 - Pulomas Office Park</option>
                                         </select>
                                     </div>
                                 </div>


                                 <!-- Nama Lantai -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label for="namaLantai" class="form-label black fs-12">Nama Lantai</label>
                                     </div>
                                     <div class="col-9">
                                         <input type="text" class="form-control form-control-sm" id="namaLantai"
                                             placeholder="Nama Lantai">
                                     </div>
                                 </div>

                                 <!-- Harga Sewa -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Harga Sewa</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga">
                                        
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>


                                 <!-- Service Charge (Termasuk Listrik) -->
                                 <div class="row mb-2 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Service Charge (Termasuk Listrik)</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text ">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga">
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Service Charge (Listrik Sendiri) -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Service Charge (Listrik Sendiri)</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text ">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga">
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Tombol -->
                                 <div class="row align-items-center">
                                     <div class="col-md-12 d-flex justify-content-end">                           
                                         <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                         <button type="button" class="btn btn-success w-185 rounded-pill btn-sm"><i class="bi bi-plus-circle pe-2"></i>Tambah Lantai </button>
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
                             <p class="fs-12 txt-tb-grey sb m-0 mb-0">No.</p>
                         </td>
                         <td scope="col">
                             <p class="fs-12 txt-tb-grey sb m-0 mb-0">Nama Lantai</p>
                         </td>
                         <td scope="col">
                             <p class="fs-12 txt-tb-grey sb m-0 mb-0">Nama Gedung</p>
                         </td>
                         <td scope="col">
                             <p class="fs-12 txt-tb-grey sb m-0">Service Charge (Termasuk Listrik)</p>
                         </td>
                         <td scope="col">
                             <p class="fs-12 txt-tb-grey sb m-0">Service Charge (Listrik Sendiri)</p>
                         </td>
                         <td scope="col" class="w-tb-239">
                             <p class="fs-12 txt-tb-grey sb m-0 mb-0">Aksi</p>
                         </td>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="fs-12 text-center" scope="row">1</td>
                         <td class="fs-12 txt-tb-grey ">lantai 1 - Gedung 1</td>
                         <td class="fs-12 txt-tb-grey">Gedung 1 - Pulomas Office Park</td>
                         <td class="fs-12 txt-tb-grey text-center">58.000 m²/bulan</td>
                         <td class="fs-12 txt-tb-grey text-center">50.000 m²/bulan</td>
                         <td class="fs-12 text-center txt-tb-grey">
                             <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4"
                                 type="button" data-bs-toggle="modal" data-bs-target="#editlantai"><i
                                     class="bi bi-pencil-fill white"></i></button>
                             <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                                 data-bs-toggle="modal" data-bs-target="#deletelantai"><i
                                     class="bi bi-trash3-fill white"></i></i></button>
                         </td>
                     </tr>

                     <tr>
                         <td class="fs-12 text-center" scope="row">2</td>
                         <td class="fs-12 txt-tb-grey ">lantai 1 - Gedung 1</td>
                         <td class="fs-12 txt-tb-grey">Gedung 1 - Pulomas Office Park</td>
                         <td class="fs-12 txt-tb-grey text-center">58.000 m²/bulan</td>
                         <td class="fs-12 txt-tb-grey text-center">50.000 m²/bulan</td>
                         <td class="fs-12 text-center txt-tb-grey">
                             <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4"
                                 type="button" data-bs-toggle="modal" data-bs-target="#editlantai"><i
                                     class="bi bi-pencil-fill white"></i></button>
                             <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                                 data-bs-toggle="modal" data-bs-target="#deletelantai"><i
                                     class="bi bi-trash3-fill white"></i></i></button>
                         </td>
                     </tr>

                     <tr>
                         <td class="fs-12 text-center" scope="row">3</td>
                         <td class="fs-12 txt-tb-grey ">lantai 1 - Gedung 1</td>
                         <td class="fs-12 txt-tb-grey">Gedung 1 - Pulomas Office Park</td>
                         <td class="fs-12 txt-tb-grey text-center">58.000 m²/bulan</td>
                         <td class="fs-12 txt-tb-grey text-center">50.000 m²/bulan</td>
                         <td class="fs-12 text-center txt-tb-grey">
                             <button type="button" class="btn btn-warning btn-sm w-36 rounded-pill me-4"
                                 type="button" data-bs-toggle="modal" data-bs-target="#editlantai"><i
                                     class="bi bi-pencil-fill white"></i></button>
                             <button type="button" class="btn btn-danger btn-sm w-36 rounded-pill ms-4" type="button"
                                 data-bs-toggle="modal" data-bs-target="#deletelantai"><i
                                     class="bi bi-trash3-fill white"></i></i></button>
                         </td>
                     </tr>
                    

                 </tbody>
             </table>
             </div>

             <!-- modal edit lantai -->
             <div class="modal fade" id="editlantai" tabindex="-1" aria-labelledby="editlantaitabel"
                 aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content rounded-0">
                         <div class="modal-body p-3">
                             <p class="modal-title fs-14 sb grey" id="editlantaitabel">Ubah Lantai</p>
                             <hr style="border: 1px solid #919191;" class="mb-3">

                             <form>
                                 <!-- Nama Gedung -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label for="addgedung" class="form-label black fs-12">Nama Gedung</label>
                                     </div>
                                     <div class="col-9">
                                         <select class="form-select form-select-sm" id="namaGedung">
                                             <option >Pilih Gedung</option>
                                             <option selected>Gedung 1 - Pulomas Office Park</option>
                                             <option >Gedung 2 - Pulomas Office Park</option>
                                             <option >Gedung 3 - Pulomas Office Park</option>
                                             <option >Gedung 4 - Pulomas Office Park</option>
                                             <option >Gedung 5 - Pulomas Office Park</option>
                                             <option >Gedung 6 - Pulomas Office Park</option>
                                         </select>
                                     </div>
                                 </div>


                                 <!-- Nama Lantai -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label for="namaLantai" class="form-label black fs-12">Nama Lantai</label>
                                     </div>
                                     <div class="col-9">
                                         <input type="text" class="form-control form-control-sm" id="namaLantai"
                                             placeholder="Nama Lantai" value="Lantai 1 - Gedung 1">
                                     </div>
                                 </div>

                                 <!-- Harga Sewa -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Harga Sewa</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga" value="150.000">
                                        
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>


                                 <!-- Service Charge (Termasuk Listrik) -->
                                 <div class="row mb-2 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Service Charge (Termasuk Listrik)</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text ">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga" value="58.000">
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Service Charge (Listrik Sendiri) -->
                                 <div class="row mb-3 align-items-center">
                                     <div class="col-3">
                                         <label class="form-label black fs-12">Service Charge (Listrik Sendiri)</label>
                                     </div>
                                     <div class="col-9">
                                         <div class="input-group input-group-sm">
                                             <span class="input-group-text ">Rp</span>
                                             <input type="text" class="form-control form-control-sm" placeholder="Harga" value="50.000">
                                             <span class="input-group-text">m²/bulan</span>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Tombol -->
                                 <div class="row align-items-center">
                                     <div class="col-md-12 d-flex justify-content-end">                           
                                         <button type="button" class="btn btn-red w-123 btn-sm rounded-pill text-white me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                         <button type="button" class="btn btn-warning w-185 rounded-pill btn-sm text-white"><i class="bi bi-pencil-fill pe-2"></i>Ubah Lantai</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- modal hapus lantai -->
             <div class="modal fade" id="deletelantai" tabindex="-1" aria-labelledby="deletelantaitabel"
             aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content rounded-0">
                     <div class="modal-body p-3">
                         <p class="modal-title fs-14 sb grey" id="deletelantaitabel">Hapus Lantai</p>
                         <hr style="border: 1px solid #919191;" class="mb-3">

                         <form>
                             <!-- Nama Gedung -->
                             <div class="row mb-3 align-items-center">
                                 <div class="col-3">
                                     <label for="addgedung" class="form-label black fs-12">Nama Gedung</label>
                                 </div>
                                 <div class="col-9">
                                     <select class="form-select form-select-sm" id="namaGedung" disabled>
                                         <option >Pilih Gedung</option>
                                             <option selected>Gedung 1 - Pulomas Office Park</option>
                                             <option >Gedung 2 - Pulomas Office Park</option>
                                             <option >Gedung 3 - Pulomas Office Park</option>
                                             <option >Gedung 4 - Pulomas Office Park</option>
                                             <option >Gedung 5 - Pulomas Office Park</option>
                                             <option >Gedung 6 - Pulomas Office Park</option>
                                     </select>
                                 </div>
                             </div>


                             <!-- Nama Lantai -->
                             <div class="row mb-3 align-items-center">
                                 <div class="col-3">
                                     <label for="namaLantai" class="form-label black fs-12">Nama Lantai</label>
                                 </div>
                                 <div class="col-9">
                                     <input type="text" class="form-control form-control-sm" id="namaLantai"
                                         placeholder="Nama Lantai" value="Lantai 1 - Gedung 1" disabled>
                                 </div>
                             </div>

                             <!-- Harga Sewa -->
                             <div class="row mb-3 align-items-center">
                                 <div class="col-3">
                                     <label class="form-label black fs-12">Harga Sewa</label>
                                 </div>
                                 <div class="col-9">
                                     <div class="input-group">
                                         <span class="input-group-text">Rp</span>
                                         <input type="text" class="form-control form-control-sm" placeholder="Harga" value="150.000" disabled>
                                    
                                         <span class="input-group-text">m²/bulan</span>
                                     </div>
                                 </div>
                             </div>


                             <!-- Service Charge (Termasuk Listrik) -->
                             <div class="row mb-3 align-items-center">
                                 <div class="col-3">
                                     <label class="form-label black fs-12">Service Charge (Termasuk Listrik)</label>
                                 </div>
                                 <div class="col-9">
                                     <div class="input-group">
                                         <span class="input-group-text ">Rp</span>
                                         <input type="text" class="form-control form-control-sm" placeholder="Harga" value="58.000" disabled>
                                         <span class="input-group-text">m²/bulan</span>
                                     </div>
                                 </div>
                             </div>

                             <!-- Service Charge (Listrik Sendiri) -->
                             <div class="row mb-3 align-items-center">
                                 <div class="col-3">
                                     <label class="form-label black fs-12">Service Charge (Listrik Sendiri)</label>
                                 </div>
                                 <div class="col-9">
                                     <div class="input-group">
                                         <span class="input-group-text ">Rp</span>
                                         <input type="text" class="form-control form-control-sm" placeholder="Harga" value="50.000" disabled>
                                         <span class="input-group-text">m²/bulan</span>
                                     </div>
                                 </div>
                                 <p class="fs-12 black mb-0">Apakah Anda yakin akan menghapus data lantai berikut?</p>
                             </div>

                             <!-- Tombol -->
                             <div class="row align-items-center">
                                 <div class="col-md-12 d-flex justify-content-end">                           
                                     <button type="button" class="btn btn-outline-danger w-123 btn-sm rounded-pill me-2" data-bs-dismiss="modal"><i class="bi bi-x-circle pe-2"></i>Batal</button>
                                      <button type="button" class="btn btn-red w-185 rounded-pill btn-sm text-white"><i class="bi bi-trash3 pe-2"></i>Hapus Lantai</button>
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
   
