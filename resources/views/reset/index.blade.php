@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Reset Password </h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Reset</button>
      </form>
      <small class="d-block text-center mt-3">Back to <a href="/login">Login</a> </small>
    </main>
  </div>
</div>

@endsection