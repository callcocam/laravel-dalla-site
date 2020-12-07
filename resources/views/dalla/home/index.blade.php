@extends('layouts.dalla')

@section('content')
    <x-slider  template="slider" />
    <x-content asset="home-nossa-hitoria" template="history" />
    <x-content asset="home-production" template="production" />

    <section class="premiacoes_home">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row h-100">
                        <div class="my-auto"  style="width: 100%">
                            <h1 class="antonio font-weight-bold text-center yellow">{{ trans('home.awards') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="premiacoes_slide">
                       <carrosel-component url="/api/v1/carrousel-3d/awards" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
