@extends('layouts.frontend')

@section('content')

<div class="row my-5">
  <div class="row col text-center"><br>
    <h2 class="fw-bold text-info my-4">Daftar ruangbelajar</h2>
  </div>
  <div class="row">
    <div class="col">
      <div class="card shadow p-3 bg-body rounded">
        <div class="card-body border-0">
          <form method="POST" action="{{ route('order-ruangbelajar') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="customerName" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control form-control-sm  @error('customerName') is-invalid @enderror" name="customerName" id="customerName" placeholder="Nama lengkap anda"value="{{ old('customerName') }}">
              @error('customerName')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div>
            <div class="mb-3">
              <label for="customerEmail" class="form-label">Email</label>
              <input type="email" class="form-control form-control-sm  @error('customerEmail') is-invalid @enderror" name="customerEmail" id="customerEmail" placeholder="nama@email.com"value="{{ old('customerEmail') }}">
              @error('customerEmail')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div>
            <div class="mb-3">
              <label for="customerPhoneNumber" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control form-control-sm  @error('customerPhoneNumber') is-invalid @enderror" name="customerPhoneNumber" id="customerPhoneNumber" placeholder="08XXXXXXXXXX"value="{{ old('customerPhoneNumber') }}">
              @error('customerPhoneNumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div>
            {{-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pilih Kelas</label>
              <select class="form-select form-control-sm" aria-label="Default select example">
                <option selected>pilih kelas</option>
                <option value="sd3">Kelas 1-3 SD</option>
                <option value="sd6">Kelas 4-6 SD</option>            
                <option value="sma">SMA IPA/IPS</option>
                <option value="smk">SMK 10, 11, 12</option>
                <option value="stanutbk">STAN UTBK</option>
              </select>
            </div> --}}
            <div class="mb-3">
              <label for="customerAddress" class="form-label">Alamat Lengkap</label>
              <textarea class="form-control form-control-sm  @error('customerAddress') is-invalid @enderror" name="customerAddress" id="customerAddress" rows="4">{{ old('customerAddress') }}</textarea>
              @error('customerAddress')<div class="invalid-feedback"> {{ $message }} </div>@enderror
            </div> 
            <button type="submit" class="btn btn-primary">Lanjutkan</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection