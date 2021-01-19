@extends('layouts.dalla')

@section('content')
<div class="main eventos">
    <div class="eventos_topo">
        <img class="img-fluid w-100" src="{{ asset('img/capa-eventos.jpg') }}">
    </div>
    <x-content asset="content-events" template="events" />
    @if ($rows)
    <div class="eventos_lista">
        <div class="container">
            <div class="row">
          @foreach ($rows as $item)
                <div class="col-md-6">
                    <div class="card bg-transparent border-0">
                        <img class="img-fluid w-100" src="{{ asset($item->cover) }}">
                        <h4 class="text-center kenyan p-2">
                            <a class="text-white" href="{{ route('dalla.events.show',$item->slug) }}">
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

</div>
@endsection
