<div class="card w-100 p-2 border-primary my-3">
    kasir
    <select class="form-select mb-2" aria-label="Default select example">
        <option selected>{{ Auth::user()->username }}</option>
      </select>
    <div data-mdb-input-init class="form-outline mb-2">
      nama pelanggan <input type="text" id="form2Example1" name="username" class="form-control" />
    </div>
    <button class="btn btn-success my-3">save</button>
</div>
