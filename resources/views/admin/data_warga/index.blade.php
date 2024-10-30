@extends('admin.layouts.app')

@section('content')
<!--Section:data warga-->
<section class="mb-4">
  <div class="card">
    <div class="card-header text-center py-3">
      <h5 class="mb-0 text-center">
        <strong>Data Warga</strong>
      </h5>
    </div>
    <div class="card-body">
      <div class=""><button class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init
          data-mdb-target="#staticBackdrop">Tambah</button></div>
      <div class="table-responsive">
        <table class="table table-hover text-nowrap table-striped">
          <thead>
            <tr>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Alamat</th>
              <th scope="col">jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Jenis Pekerjaan</th>
              <th scope="col">Golongan Darah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Ujang Nurzaman</th>
              <td>F 11/3</td>
              <td>Laki-Laki</td>
              <td>Islam</td>
              <td>Karyawan</td>
              <td>AB</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm btn-rounded" data-mdb-modal-init
                  data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                  Edit
                </button>
                <button type="button" class="btn btn-danger btn-sm btn-rounded" data-mdb-modal-init
                  data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                  Hapus
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--Section: data warga-->


<!--Modal:Tambah Warga-->
<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Warga</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('admin.data_warga.form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Save</button>
      </div>
    </div>
  </div>
</div>


@endsection