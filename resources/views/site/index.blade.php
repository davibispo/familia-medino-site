@extends('store.layouts.main')

@section('content')
<div class="container">    
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">ENERGIA SOLAR TÉRMICA E FOTOVOLTÁICA</div>
                <div class="panel-body"><a href="http://hidrosolenergiasolar.com.br/site2018/" target="_blank"><img src="{{ url('assets/imgs/logo-energia-solar.png') }}" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><a href="http://hidrosolenergiasolar.com.br/site2018/" target="_blank">Você Confia. A Natureza Agradece!</a></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">LOJA DE CONDIMENTOS</div>
                <div class="panel-body"><a href='{{ route('home') }}'><img src="{{ url('assets/imgs/logo-temperos.png')}}" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><a href='{{ route('home') }}'>Os Melhores Temperos da Região</a></div>
            </div>
        </div>
        <div class="col-sm-4"> 
            <div class="panel panel-danger">
                <div class="panel-heading">COZIMENTO SEM GORDURA</div>
                <div class="panel-body"><a href="{{ route('site.cozimento') }}"><img src="{{ url('assets/imgs/cozimento.png')}}" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><a href="{{ route('site.cozimento') }}">Mantenha uma vida saudável</a></div>
            </div>
        </div>
    </div>
    
</div>

@endsection