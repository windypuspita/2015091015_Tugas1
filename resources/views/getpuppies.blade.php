@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Puppies menunggu kehadiran anda:</h3>
    <div class="row">
        @foreach ($poppies as $poppie)
        <div class="col-md-4">
            <div class="card mt-3" style="width: 18rem;">
                <img src="{{ $poppie["img"] }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $poppie["tittle"] }}</h5>
                  <p class="card-text">{{ $poppie["desc"] }}</p>
                  <p class="card-text">Rp: {{ $poppie["price"] }}</p>
                  <a href="#" class="btn btn-primary">Adopt now</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
