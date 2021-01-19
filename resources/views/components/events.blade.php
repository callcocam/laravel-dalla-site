@if($content)
<div class="eventos_conteudo">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row h-100">
                    <div class="my-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="eventos_titulo kenyan p-3">{{ $content->beforeLast($content->name) }} <span class="yellow">{{ $content->afterLast($content->name) }}</span></h1>
                            </div>
                            <div class="col-md-12">
                                <div class="p-3 text-justify">
                                    {!!  $content->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid w-100" src="{{ asset( $content->cover ) }}">
            </div>
        </div>
    </div>
</div>
@endif
