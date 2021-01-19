@extends('layouts.dalla')

@section('content')
<div class="main campanha">
    <div class="campanha_topo">
        <img class="img-fluid w-100" src="{{ asset('img/banner-campanha.jpg') }}">
    </div>
    <div class="container">
        <div class="campanha_conteudo">
            <div class="row">
                <div class="col-md-7">
                    <div class="row"> <h2 class="campanha_titulo_sublinhado kenyan yellow">CAMPANHA</h2></div>
                    <div class="row">   <h1 class="campanha_titulo kenyan">PEÇA <span class="yellow">CHOPP</span> DALLA</h1></div>
                            <div class="row"> <img class="img-fluid w-100" src="img/campanha-peca-chopp.fw.png"></div>
                </div>
                <div class="col-md-5">
                    <div class="row h-100">
                        <div class="campanha_conteudo_direita my-auto w-100">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="campanha_pecas">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="campanha_titulo_pecas kenyan">PEÇAS DA <span class="yellow">CAMPANHA</span></h2>
                </div>
                <div class="col-md-12">
                    <div class="campanha_slide">
                        <div id="campanha_slide">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
