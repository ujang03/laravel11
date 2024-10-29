@extends('admin.layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>Tambah Jenis Barang</h4>
                <form method="post" action="{{route('jenisbrg.store')}}">
                    @csrf

                    <div class="row mb-3">
                        <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_barang" id="jenis_barang">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keterangan" id="keterangan">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="is_aktif" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 form-switch">
                            <input type="checkbox" class="form-check-input mx-auto" id="is_aktif" name="is_aktif">
                        </div>
                    </div>

                    {{-- END ROW --}}
                    <input type="submit" class="btn btn-outline-info" value="Tambah Jenis Barang">
                    <a href="{{route('jenisbrg.index')}}" class="btn btn-outline-danger">Cancel</a>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
