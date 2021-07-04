@extends('layouts.frontend')

@section('content')
<div class="row d-flex justify-content-center mt-4">
<div class="row col mb-3 text-center">
  <span class="d-flex justify-content-center"><h2 class="fw-bold text-dark">Tunggu apa lagi! </h2> <h2 class="fw-bold text-info"> Yuk buruan berlangganan.</h2></span>
</div>
<div class="row d-flex justify-content-center">
  <div class="card col-3 mx-2 ruangbelajar">
    <div class="card-body">
      <h5 class="card-title text-white fw-bold">Langganan ruangbelajar</h5>
      <p class="card-text text-white">Akses semua video, soal dan rangkuman dengan berlangganan!</p>
      <a href="{{route('ruangbelajar')}}" class="btn btn-primary">Daftar</a>
    </div>
  </div>
  <div class="card col-3 mx-2 englishskill">
    <div class="card-body">
      <h5 class="card-title text-white fw-bold">English Skill Academy</h5>
      <p class="card-text text-white">Kursus Bahasa inggris interaktif dengan pengajar international</p>
      <a href="{{route('englishacademy')}}" class="btn btn-primary">Daftar</a>
    </div>
  </div>
  <div class="card col-3 mx-2 skillacademy">
    <div class="card-body">
      <h5 class="card-title text-white fw-bold">Skill Academy</h5>
      <p class="card-text text-white">Tingkatkan technical skill dan softskill untuk mahasiswa, profesional dan umum</p>
      <a href="{{route('skillacademy')}}" class="btn btn-primary">Daftar</a>
    </div>
  </div>
</div>
@endsection