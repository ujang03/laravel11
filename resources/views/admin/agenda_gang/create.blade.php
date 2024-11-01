 @method('POST')
 @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
  
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input name="title" type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Title News</label>
      </div>
    </div>
  </div>

  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <textarea name="description" class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">NEWS description</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input name="image" type="file" class="form-control" id="form6Example7" rows="4"></input>
    <label class="form-label" for="form6Example7"></label>
  </div>
  
