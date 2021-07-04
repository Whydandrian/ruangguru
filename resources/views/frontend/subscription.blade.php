@extends('layouts.frontend')

@section('content')

<div class="row my-5">
  <div class="row col text-center"><br>
    <h2 class="fw-bold text-info my-4">Pemberitahuan</h2>
  </div>
  <div class="row">
    <div class="col">
      <div class="card shadow p-3 bg-body rounded">
        <div class="card-body border-0">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ $idUser }}
                        </div>
          @endif
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection