@extends('layouts.main')

@section('content')
<section id="products">
    <div
      class="container d-flex justify-content-center align-items-center flex-wrap"
    >
      <div class="product-label fs-3 text-uppercase">Current Series</div>
          @foreach($comics as $comic)
      <div>
      
        <div class="comic-card px-3 py-3 my-5"
      >
         <img src="{{ $comic['thumb']}}" alt="" /> 
        <h4>{{ $comic['title'] }}</h4>
      </div>

        
      </div>
      @endforeach
    </div>
  </section>

@endsection