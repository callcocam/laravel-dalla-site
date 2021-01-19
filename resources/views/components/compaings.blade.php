@if($content)
<div class="campanhas_topo">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row h-100">
                    <h1 class="antonio yellow my-auto w-100 pr-3">{{ $content->name }}</h1>
                </div>
            </div>
            <div class="col-md-7 campanhas_topo_desc">
                <p> {!!  $content->description !!}</p>
            </div>
        </div>
    </div>
</div>
@endif
