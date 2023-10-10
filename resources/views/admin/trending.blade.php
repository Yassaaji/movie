@extends('layouts.admin')

@section('content')
<title>Trending Film</title>

<style>
    .body {
        background-color: #333333;

    }
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

<div class="container p-5">
    <div class="row mb-5">
        <h1 class="fs-1 text-white" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Film Populer</h1>
    </div>
    <div class="row " style=""  >
        @forelse ( $films as $i => $film )
        <div class="col-lg-4">
          <a href="{{ route('detailfilm',$film->id) }}">
              <div class="card border-0 overflow-hidden">
              <div class="card-body">
                  <img class="card-img object-fit-cover " src="{{ asset('storage/thumbnile/' . $film->thumbnile) }}" alt="" height="400px" width="200px">
              </div>
              <div class=" bg-dark w-100 p-3 card-info">
                  <h6 class="fs-2 text-white fw-bold" style="font-family: Poppins"><i class="fa fa-trophy" style="color: rgb(255, 187, 0);"></i> {{ $i+1 }}. {{ $film->judul }}</h6>
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

  <script>

  </script>

@endsection
