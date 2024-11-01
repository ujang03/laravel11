@extends('admin.layouts.app')

@section('content')
<!--Section:data warga-->
{{-- <section class="mb-4">
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
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($dataWarga as $i => $item)
            <tr>

              <th scope="row">{{ $item->name }}</th>
              <td>{{ $item->profile->gender }}</td>
              <td>{{ $item->profile->religion }}</td>
              <td>{{ $item->profile->blood_type }}</td>
              <td>{{ $item->profile->job }}</td>
              <td>AB</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm btn-rounded" data-mdb-modal-init
                  data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                  Edit
                </button>
                <button type="button" class="btn btn-danger btn-sm btn-rounded" data-mdb-modal-init data-mdb-ripple-init
                  data-mdb-target="#staticBackdrop">
                  Hapus
                </button>
              </td>
            </tr>
            @empty

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
                <button type="button" class="btn btn-danger btn-sm btn-rounded" data-mdb-modal-init data-mdb-ripple-init
                  data-mdb-target="#staticBackdrop">
                  Hapus
                </button>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section> --}}
<!--Section: data warga-->

@livewire('data-warga')
{{-- @include('admin.data_warga.modal-warga') --}}


@endsection