@extends('layouts.main')



@section('content')
    <div id="comic-details">
        <div class="container-fluid overhead position-relative">
            <img class="comic-cover" src="{{ $comic['thumb'] }}" alt="">
        </div>

        {{-- TOP --}}
        <div class="container">
            <div class="top row">
                <div class="col-8">
                    <h2 class="py-3">{{ $comic['title'] }}</h2>
                    <div class="availability">
                        <div class="price-tag py-3 my-2 row justify-content-between">
                            <div class="col-6">U.S. Price: {{ $comic['price'] }}</div>
                            <div class="col-4">
                                <div class="row justify-content-around">
                                    <div>Available</div>
                                    <div>Check Availability</div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold">Advertisement</p>
                    <img class="img-fluid" src="{{ asset('img/adv.jpg') }}" alt="">



                </div>
            </div>
        </div>
        {{-- BOTTOM --}}
        <div class="bottom container-fluid">
            <hr>
            <div class="container">
                <div class="row">
                    {{-- BOTTOM LEFT COL --}}
                    <div class="left col-6">
                        <h3>Talent</h3>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">Art By:</h5>
                            <div class="artists col-6">
                                @foreach ($comic['artists'] as $artist)
                                    <span class="fs-7">{{ $artist }}</span>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">Written By:</h5>
                            <div class="writers col-6">
                                @foreach ($comic['writers'] as $writer)
                                    <span class="fs-7">{{ $writer }}</span>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    </div>
                    {{-- BOTTOM RIGHT COL --}}
                    <div class="right col-6">
                        <h3>Specs</h3>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">Series:</h5>
                            <h5 class="fs-6">{{ $comic['series'] }}</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">U.S. Price:</h5>
                            <h5 class="fs-6">{{ $comic['price'] }}</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="fs-6">On Sale Date:</h5>
                            <h5 class="fs-6">{{ $comic['sale_date'] }}</h5>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
