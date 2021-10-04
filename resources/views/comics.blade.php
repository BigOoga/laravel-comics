@extends('layouts.main')

@section('content')
    <section id="products">
        <div class="container pb-3">
            <div class="product-label fs-3 text-uppercase">Current Series</div>

            <div class="row justify-content-center align-items-center flex-wrap py-5">
                @foreach ($comics as $comic)


                    <div class="col-2">
                        <div class="comic-card">
                            <a href="{{ url("/comic/$loop->index") }}">


                                <div class="img-container"><img class="img-fluid" src="{{ $comic['thumb'] }}"
                                        alt="" /></div>



                            </a>
                            <h4 class="fs-5 text-uppercase">{{ $comic['title'] }}</h4>
                        </div>
                    </div>



                @endforeach
            </div>
        </div>
    </section>

@endsection
