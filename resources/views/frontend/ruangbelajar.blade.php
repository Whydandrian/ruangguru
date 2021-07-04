@extends('layouts.frontend')

@section('content')
<div class="row">
  <div class="row col d-flex text-center">
    <h2 class="fw-bold text-info">Pilih Kelas Kalian</h2>
  </div>
  <div class="row">
    <div class="col">
      <form >
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Pilih Kelas</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>pilih kelas</option>
            <option value="sd3">Kelas 1-3 SD</option>
            <option value="sd6">Kelas 4-6 SD</option>            
            <option value="sma">SMA IPA/IPS</option>
            <option value="smk">SMK 10, 11, 12</option>
            <option value="stanutbk">STAN UTBK</option>
          </select>
        </div>  
        <button type="submit" class="btn btn-primary">Lanjutkan</button>
      </form>
    </div>
  </div>
</div>
@endsection