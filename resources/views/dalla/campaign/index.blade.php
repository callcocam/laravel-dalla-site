@extends('layouts.dalla')

@section('content')
<div class="campanhas">

    <x-content asset="compains-title" template="compaings" />

    @if ($rows)
    <div class="campanhas-gallery antonio">
        <div class="">
            <div class="row">
                @foreach ($rows as $item)
                <div class="col-md-3 no-gutters">
                    <a href="{{ route('dalla.campaigns.show', $item->slug)}}" class="gallery-img animate-box">
                        <img class="img-responsive" src="{{ asset($item->cover)}}" alt="">
                        <div class="desc text-center">
                            <h2>{{ $item->name }}</h2>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
