@extends('admin.layouts.app')


@section('content')
<section>
  <form action="" method="POST" class="">

    <div class="card p-3">
      <input type="hidden" id="dataWargaId" value="{{ $item->id }}">
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form6Example1" class="form-control" name="name" value="{{ $item->name }}" />
        <label class="form-label" for="form6Example1">Nama Lengkap</label>
      </div>

      <!-- Text input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form6Example4" class="form-control" name="address"
          value="{{ $item->profile->address }}" />
        <label class="form-label" for="form6Example4">Alamat</label>
      </div>

      <div data-mdb-select-init class="form-outline mb-4">
        <label for="selectGender" class="form-label mb-0"><small>Jenis kelamin</small></label>
        <select id="selectGender" class="form-select" name="gender">
          <option></option>
          <option value="Laki-laki" {{ $item->profile->gender == 'Laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
          <option value="Perempuan" {{ $item->profile->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
      </div>

      <div data-mdb-select-init class="form-outline mb-4">
        <label for="selectReligion" class="form-label mb-0"><small>Agama</small></label>
        <select id="selectReligion" class="form-select" name="religion">
          <option></option>
          <option value="Buddha" {{ $item->profile->religion == 'Buddha' ? 'selected' : '' }}>Buddha</option>
          <option value="Islam" {{ $item->profile->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
          <option value="Katolik" {{ $item->profile->religion == 'Katolik' ? 'selected' : '' }}>Katolik</option>
          <option value="Konghucu" {{ $item->profile->religion == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
          <option value="Protestan" {{ $item->profile->religion == 'Protestan' ? 'selected' : '' }}>Protestan</option>
        </select>
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form6Example5" class="form-control" name="job" value="{{ $item->profile->job }}" />
        <label class="form-label" for="form6Example5">Jenis Pekerjaan</label>
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label mb-0"><small>Golongan Darah</small></label>
        <select name='blood_type' class="form-select">
          <option></option>
          <option value="A" {{ $item->profile->blood_type == 'A' ? 'selected' : '' }}>A</option>
          <option value="AB" {{ $item->profile->blood_type == 'AB' ? 'selected' : '' }}>AB</option>
          <option value="B" {{ $item->profile->blood_type == 'B' ? 'selected' : '' }}>B</option>
          <option value="O" {{ $item->profile->blood_type == 'O' ? 'selected' : '' }}>O</option>
        </select>
      </div>
      <div class="text-end">
        <button type="button" class="btn btn-secondary">Cancel</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>

</section>

@endsection