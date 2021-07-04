@extends('layouts.frontend')

@section('content')
<div class="row d-flex mt-4 mx-4 justify-content-center">
<div class="row col text-center ">
  <span class="d-flex px-5 mx-5 mt-4 justify-content-center"><h2 class="fw-bold text-info inline">Solusi belajar online terlengkap </h2> <h2 class="fw-bold ml-1"> untuk</h2></span>
  <h2>SD, SMP, SMA, dan SMK</h2>
</div>
<div class="row px-5 mx-5 mt-4">
  <div class="col-6 px-4">
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width: 750px;">
          <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/logotype_rubel_L.svg" alt=""></h5>
                  <p class="card-text">Belajar mandiri dengan puluhan ribu video belajar beranimasi dan latihan soal. Bisa di-download, hemat kuota!</p>
                  <a href="{{route('ruangbelajar')}}" class="btn btn-warning rounded-pill "><span class="fw-bold text-white">Langganan Sekarang <i class="fas fa-arrow-right"></i></span></a>
                </div>
              </div>
            <div class="col-md-4">
              <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/img_rubel_vert%20(2).png" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
  </div>
  <div class="col-6 px-4">
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width: 750px;">
          <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/logotype_BAO_L.svg" alt=""></h5>
                  <p class="card-text">Belajar mandiri dengan puluhan ribu video belajar beranimasi dan latihan soal. Bisa di-download, hemat kuota!</p>
                  <a href="{{route('ruangbelajar')}}" class="btn btn-warning rounded-pill "><span class="fw-bold text-white">Langganan Sekarang <i class="fas fa-arrow-right"></i></span></a>
                </div>
              </div>
            <div class="col-md-4">
              <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/img_BAO_vert%20(2).png" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
  </div>
</div>
<div class="row  px-5 mx-5">
  <div class="col-6 px-4">
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width: 750px;">
          <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/ENGLISH%20ACADEMY-LOGO2%201.png" alt=""></h5>
                  <p class="card-text">Belajar mandiri dengan puluhan ribu video belajar beranimasi dan latihan soal. Bisa di-download, hemat kuota!</p>
                  <a href="{{route('englishacademy')}}" class="btn btn-info rounded-pill "><span class="fw-bold text-white">Lihat Lebih Lengkap <i class="fas fa-arrow-right"></i></span></a>
                </div>
              </div>
            <div class="col-md-4">
              <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/EA_newwww.png" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
  </div>
  <div class="col-6 px-4">
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width: 750px;">
          <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/logotype_SA_L.svg" alt=""></h5>
                  <p class="card-text">Belajar mandiri dengan puluhan ribu video belajar beranimasi dan latihan soal. Bisa di-download, hemat kuota!</p>
                  <a href="{{route('skillacademy')}}" class="btn btn-info rounded-pill "><span class="fw-bold text-white">Lihat Lebih Lengkap <i class="fas fa-arrow-right"></i></span></a>
                </div>
              </div>
            <div class="col-md-4">
              <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/sa_newww.png" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
  </div>
</div>
</div>
@endsection