@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
      <form action="{{url('captcha-validation')}}" method="post">
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
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        
        <div class="captcha mt-4">
          <span>{!! captcha_img() !!}</span>
          <button type="button" class="btn btn-danger" class="reload" id="reload">
              &#x21bb;
          </button>
      </div>
      <div class="form-group mb-4 mt-2">
          <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
      </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Forgot passowrd? <a href="/reset">Reset Now!</a></small>
    </main>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $('#reload').click(function () {
      $.ajax({
          type: 'GET',
          url: 'reload-captcha',
          success: function (data) {
              $(".captcha span").html(data.captcha);
          }
      });
  });
</script>

@endsection