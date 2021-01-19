@isset($sliders)
<section class="carrosel_home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
{{--        <ol class="carousel-indicators">--}}
{{--            @foreach ($sliders as $key => $slider)--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $slider->isActive($key) }}"></li>--}}
{{--            @endforeach--}}
{{--        </ol>--}}
        <div class="carousel-inner">
           @foreach ($sliders as $key => $slider)
                <div class="carousel-item {{ $slider->isActive($key) }}">
                    <img src="{{ asset($slider->cover) }}" class="d-block w-100" alt="{{ $slider->name }}">
                </div>
           @endforeach
        </div>
    </div>
</section>
@endisset
