@extends('layouts.main')

@section('content')

<section id="products">
    <div
      class="container d-flex justify-content-center align-items-center flex-wrap"
    >
      <div class="product-label fs-3 text-uppercase">Movies</div>
      {{-- <div v-for="(comic, index) in comics" :key="index"> --}}
        {{-- <ComicCard :card="comic" /> --}}
      </div>
    </div>
  </section>

@endsection