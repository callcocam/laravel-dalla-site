@extends('layouts.dalla')

@section('content')
<div class="main revendedor">
    <div class="revendedor_topo">
        <img class="img-fluid w-100" src="{{ asset('img/banner-revendedor.jpg') }}">
    </div>
    <div class="revendedor_conteudo">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <x-content asset="home-seja-um-revendedor" template="resellers" />
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                        @if (session('success'))
                              <div class="alert alert-success">
                                  Sua menssagem foi recebida com sucesso:), logo entraremos em contato!
                              </div>
                        @endif
                        <form class="revendedor_form" action="{{ route('dalla.resellers.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" value="{{ old('name') }}"  class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('reselles.form_nane') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ trans('reselles.form_email') }}">
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ trans('reselles.form_phone') }}">
                                @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" placeholder="{{ trans('reselles.form_subject') }}">
                                @error('subject')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror

                            </div>
                            <div class="form-group">
                                <textarea name="description" value="{{ old('description') }}" id="message" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" placeholder="{{ trans('reselles.form_message') }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-form btn-md float-right" value="{{ trans('reselles.form_send') }}">
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col revendedor_icon">
                                <div class="line">
                                  <h1><img class="img-fluid px-3" src="{{ asset('img/icon/dalla.fw.png') }}"></h1>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center mt-4">
{{--                            <a class="btn btn_revendedor font-weight-bold"><img class="mr-2" src="{{ asset('img/icon/whatsapp.fw.png') }}"> {{ trans('tenant.phone') }}</a>--}}
                            <a href="https://api.whatsapp.com/send?phone=5549920200445&text=Ol%C3%A1%2C%20quero%20ser%20um%20Revendedor%20Dalla!" target="_blank" class="btn btn_revendedor font-weight-bold text-white"><img class="mr-2" src="{{ asset('img/icon/whatsapp.fw.png') }}"> (49) 92020-0445</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .line h1 {
        overflow: hidden;
        text-align: center;
    }
    .line h1:before {
        content: "";
        display: inline-block;
        height: 2px;
        position: relative;
        vertical-align: middle;
        width: 50%;
        background: #C99E67;
        }
    .line h1:after {
        background: #C99E67;
        content: "";
        display: inline-block;
        height: 2px;
        position: relative;
        vertical-align: middle;
        width: 50%;
    }
    .line h1:before {
        right: 0;
        margin-left: -50%;
    }
    .line h1:after {
        left: 0;
        margin-right: -50%;
    }
</style>
