<!--Modal:Tambah Warga-->
<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Warga</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <form action="{{ route('data-warga.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form6Example1" class="form-control" name="name" />
            <label class="form-label" for="form6Example1">Nama Lengkap</label>
          </div>

          <!-- Text input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="address" />
            <label class="form-label" for="form6Example4">Alamat</label>
          </div>

          <div data-mdb-select-init class="form-outline mb-4">
            <label for="selectGender" class="form-label mb-0"><small>Jenis kelamin</small></label>
            <select id="selectGender" class="form-select" name="gender">
              <option></option>
              <option value="Laki-laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div data-mdb-select-init class="form-outline mb-4">
            <label for="selectReligion" class="form-label mb-0"><small>Agama</small></label>
            <select id="selectReligion" class="form-select" name="religion">
              <option></option>
              <option value="Islam">Islam</option>
              <option value="Protestan">Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form6Example5" class="form-control" name="job" />
            <label class="form-label" for="form6Example5">Jenis Pekerjaan</label>
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label mb-0"><small>Golongan Darah</small></label>
            <select name='blood_type' class="form-select">
              <option></option>
              <option value="A">A</option>
              <option value="AB">AB</option>
              <option value="B">B</option>
              <option value="O">O</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Save</button>
        </div>
      </form>
    </div>
  </div>
</div>