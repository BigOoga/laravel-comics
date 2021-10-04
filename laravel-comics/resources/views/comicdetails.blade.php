@extends('layouts.main')



@section('content')
<section id="comic-details">
  <div class="top">
    <h2>{{ $comic['title'] }}</h2>
<div class="availability">
    <div>U.S. Price: {{ $comic['price']}}</div>
<div>Available</div>
<div>Check Availability</div>
<div class="description">
    <p>{{ $comic['description'] }}</p>
</div>
</div>


  </div>
  <div class="bottom d-flex align-items-center">
<div class="left  col-6">
<h3>Talent</h3>
<div class="d-flex justify-content-between">
<h4>Art By:</h4>
<div class="artists">
@foreach ($comic['artists'] as $artist)
   {{$artist}}
@endforeach
</div>
</div>
<div class="d-flex justify-content-between">
    <h4>Written By:</h4>
    <div class="writers">
    @foreach ($comic['writers'] as $writer)
    {{$writer}}
@endforeach
</div>
</div>


</div>
<div class="right col-6">
    <h3>Specs</h3>
    <div class="d-flex justify-content-between">
        <h4>Series:</h4>
        <h4>{{ $comic['series']}}</h4>
    </div>
    <div class="d-flex justify-content-between">
        <h4>U.S. Price:</h4>
        <h4>{{ $comic['price']}}</h4>
    </div>
    <div class="d-flex justify-content-between">
        <h4>On Sale Date:</h4>
        <h4>{{ $comic['sale_date'] }}</h4>
    </div>


</div>


  </div>







  </section>

@endsection