@if($content)
<section class="produtos_home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-2  order-md-1">
                <img src="{{ asset( $content->cover ) }}" class="d-block w-100">
            </div>
            <div class="col-md-5 producao order-1  order-md-2">
                <h1 class="antonio font-weight-bold">{{ $content->name }}</h1>
                <div class="produtos_home_content">
                     {!!  $content->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endif
