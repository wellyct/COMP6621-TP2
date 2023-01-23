

@extends('layouts.main')

@section('container')


    <h1>About</h1>
    <div class="px-4 py-5 my-5 text-center">
      <img class="img-thumbnail rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" alt="" width="200">
      <h4 class="display-6 fw-bold">{{ $name }}</h4>
      <h4 class="dispaly-7 fw-bold">{{ $nim }}</h4>
      <h4 class="dispaly-7 fw-bold">{{ $email }}</h4><br>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><h4>Tugas Personal 2 - Soal Kasus</h4>
        Membuat Login UI dengan menggunakan Laravel Framework </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
@endsection