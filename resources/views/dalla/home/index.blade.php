@extends('layouts.dalla')

@section('content')
    <x-slider  template="slider" />
    <div class="container">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GBdl2XxyeKU" allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <x-content asset="home-nossa-hitoria" template="history" />
    <x-content asset="home-production" template="production" />

{{--    <section class="premiacoes_home">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="row h-100">--}}
{{--                        <div class="my-auto"  style="width: 100%">--}}
{{--                            <h1 class="antonio font-weight-bold text-center yellow">{{ trans('home.awards') }}</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div id="premiacoes_slide">--}}
{{--                       <carrosel-component url="/api/v1/carrousel-3d/awards" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
