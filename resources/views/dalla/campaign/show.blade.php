@extends('layouts.dalla')
@section('content')
<div class="main campanha">
      @if ($rows)
    <div class="campanha_topo">
        <img class="img-fluid w-100" src="{{ asset($rows->cover) }}">
    </div>

    <div class="container">
        <div class="campanha_conteudo">
            <div class="row">
                <div class="col-md-7">
                    <div class="row"> <h2 class="campanha_titulo_sublinhado kenyan yellow">{{ trans('compaing.title') }}</h2></div>
                    <div class="row">   <h1 class="campanha_titulo kenyan">{{ $rows->beforeLast($rows->name) }} <span class="yellow">{{ $rows->afterLast($rows->name) }}</h1></div>
                            <div class="row"> <img class="img-fluid w-100" src="{{ asset($rows->card_cover) }}"></div>
                </div>
                <div class="col-md-5">
                    <div class="row h-100">
                        <div class="campanha_conteudo_direita my-auto w-100">
                            <p>{!! $rows->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="campanha_pecas">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="campanha_titulo_pecas kenyan">{{ $rows->beforeLast(trans('compaing.pecas')) }} <span class="yellow">{{ $rows->afterLast(trans('compaing.pecas')) }}</span></h2>
                </div>
                <div class="col-md-12">
                    <div class="campanha_slide">
                        <div id="campanha_slide">
                            <carrousel-campaing-parts-component  url="{{ route('dalla.home.carrousel3d.campaings', $rows->slug) }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
