<form>
  <div data-mdb-input-init class="form-outline mb-4">
    <input wire:model="name" type="text" id="form6Example1" class="form-control" />
    <label class="form-label" for="form6Example1">Nama Lengkap</label>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input wire:model='address' type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Alamat</label>
  </div>

  <div data-mdb-select-init class="form-outline mb-4">
    <label for="selectGender" class="form-label mb-0"><small>Jenis kelamin</small></label>
    <select wire:model='gender' id="selectGender" class="form-select">
      <option></option>
      <option value="Laki-laki">Laki - Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div data-mdb-select-init class="form-outline mb-4">
    <label for="selectReligion" class="form-label mb-0"><small>Agama</small></label>
    <select wire:model='religion' id="selectReligion" class="form-select">
      <option></option>
      <option value="Islam">Islam</option>
      <option value="Protestan">Protestan</option>
      <option value="Katolik">Katolik</option>
      <option value="Buddha">Buddha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input wire:model='job' type="text" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Jenis Pekerjaan</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input wire:model='blood_type' type="text" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Golongan Darah</label>
  </div>

</form>