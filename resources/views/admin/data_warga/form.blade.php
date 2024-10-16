<form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Address</label>
  </div>

  <div data-mdb-select-init class="form-outline mb-4">
    <label for="selectGender" class="form-label mb-0"><small>Jenis kelamin</small></label>
    <select id="selectGender" class="form-select">
      <option></option>
      <option value=" L">Laki - Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>


  <!-- Text input -->
  {{-- <div data-mdb-input-init class="form-outline mb-4">
    <select class="form-control" id="floatingSelect" aria-label="Floating label select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div> --}}

  <!-- Email input -->

  <!-- Number input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Additional information</label>
  </div>
</form>