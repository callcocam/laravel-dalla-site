@if($content)
<section class="sobre_home">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="historia_home">
                    <h1 class="antonio font-weight-bold"> {{ $content->beforeLast($content->name) }} <span class="yellow">{{ $content->afterLast($content->name) }}</span></h1>
                    <div class="historia_home_content">
                        {!!  $content->description !!}
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img src="{{ asset( $content->cover ) }}" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
@endif
