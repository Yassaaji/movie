@extends('layouts.admin')

@section('content')

<style>
    .container{
        width: 100%;
        height: 100vh;
        background-color: #333333;
    }

    .card-info{
        position: absolute;
        bottom: -60px;
        transition: 0.25s
    }

   a:hover > .card-info {
        bottom: 0px;
        
   }
</style>

<div class="container p-5 ">
    <div class="row mb-5">
       <h1 class="fs-1 fw-bold text-white ">Film Populer</h1>
    </div>
    <div class="row">
        @forelse ( $films as $i => $film )
        <div class="col-lg-4">
          <a href="{{ route('detailfilm',$film->id) }}">
              <div class="card border-0 overflow-hidden">
              <div class="card-body">
                  <img class="card-img object-fit-cover h-100" src="{{ asset('storage/thumbnile/' . $film->thumbnile) }}" alt="">
              </div>
              <div class=" bg-dark w-100 p-3 card-info">
                  <h2 class="fs-2 text-white fw-bold">{{ $film->judul }} #{{ $i+1 }}</h2>
                  <p class="fs-4 text-white">dengan {{ $film->total_penonton }} penonton</p>
              </div>
          </a>
          </div>
        </div>
        @empty
            <div class="w-100 h-100">
                <h1>Film tidak ada yang sedang tayang</h1>
            </div>
        @endforelse
     

    </div>
  </div>

  <script>

  </script>

@endsection
