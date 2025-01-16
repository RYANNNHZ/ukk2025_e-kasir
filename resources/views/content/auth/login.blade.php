@extends('template');

@section('konten')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 offset-lg-3 ">
                <form method="POST" action="/login">
                    @csrf
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        @error('username')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                      <input type="text" id="form2Example1" name="username" class="form-control" />
                      <label class="form-label" for="form2Example1">username</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        @error('password')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                      <input type="password" id="form2Example2" name="password" class="form-control" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->

                      </div>
                    </div>

                    <!-- Submit button -->
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">login</button>

                    <!-- Register buttons -->
                    <div class="text-center">

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection
