@if($content)
<div class="row h-100">
    <div class="my-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="row">  <h1 class="revendedor_titulo kenyan">{{ $content->beforeLast($content->name) }} <span class="yellow">{{ $content->afterLast($content->name) }}</span></h1></div>
            </div>
            <div class="col-md-12">
                <div class="p-2 text-justify">
                    <p> {!!  $content->description !!}</p>
                </div>
                <img class="img-fluid py-5" src="{{ asset( $content->cover ) }}">

            </div>
        </div>
    </div>
</div>
@endif
