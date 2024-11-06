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
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($dataWarga as $i => $item)
            <tr>
              <th scope="row">{{ $item->name }}</th>
              <td>{{ $item->profile->address ?? '' }}</td>
              <td>{{ $item->profile->gender ?? '' }}</td>
              <td>{{ $item->profile->religion ??'' }}</td>
              <td>{{ $item->profile->job ??''}}</td>
              <td>{{ $item->profile->blood_type??'' }}</td>
              <td>
                <a href="{{ route('data-warga.edit', $item->id) }}" class="btn btn-warning btn-sm btn-rounded">
                  Edit
                </a>
                <form action="{{ route('data-warga.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm btn-rounded">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <th colspan='7' class="text-center">Kosong</th>

            </tr>

            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--Section: data warga-->


@include('admin.data_warga.modal-tambah')


@endsection