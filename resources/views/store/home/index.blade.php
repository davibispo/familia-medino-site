@extends('store.layouts.main')

@php
    $title = 'Condimentos Thiara'
@endphp

@section('content')

<section class="products">
    
    <h2>LOJA DE CONDIMENTOS THIARA</h2><br>
    
    @forelse($products as $product)
    <div class="col-sm-4" style="width:270px">
        <div class="panel panel-primary">
            <div class="panel-heading"><b>{{$product->name}}</b> <br> R$ {{ $product->price }}</div>
            <div class="panel-body"><img src="{{url("assets/imgs/temp/{$product->image}")}}" class="img-responsive" style="width:100%; height:200px;" alt="Image"></div>
            <div class="panel-footer text-center"><a href="{{route('add.cart', $product->id)}}">Adicionar ao Carrinho <i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
        </div>
    </div>
    
    @empty
        <p>Não existem produtos cadastrados!</p>
    @endforelse

</section><!--Products-->

@endsection