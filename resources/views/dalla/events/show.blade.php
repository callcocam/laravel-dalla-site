@extends('layouts.dalla')

@section('content')
@isset($rows)
<div class="main evento">
    <div class="evento_topo">
        <img class="img-fluid w-100" src="{{ asset($rows->cover) }}">
    </div>
    <div class="evento_conteudo">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="row h-100">
                        <div class="my-auto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row"> <h2 class="evento_titulo_sublinhado kenyan yellow">{{ trans('event.title') }}</h2></div>
                                    <div class="row">   <h1 class="campanha_titulo kenyan">{{ $rows->beforeLast($rows->name) }} <span class="yellow">{{ $rows->afterLast($rows->name) }}</span></h1></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-2 text-justify">
                                       {!! $rows->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid p-5" src="{{ asset($rows->card_image) }}">
                </div>
            </div>
        </div>
    </div>
    @if ($rows->event_edtions)
    <div class="eventos_lista">
        <div class="container">
            <div class="row">
               @foreach ($rows->event_edtions as $item)
                    <div class="col-md-4">
                        <div class="card bg-transparent border-0">
                            <img class="img-fluid w-100" src="{{ asset($item->cover) }}">
                            <h4 class="text-center kenyan p-2">
                                <a class="text-white" href="">
                                    {{ $item->name }}
                                </a>
                            </h4>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
    @endif
   @endisset
</div>
@endsection
