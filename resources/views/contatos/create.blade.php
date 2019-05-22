@extends('store.layouts.main')

@section('content')
<div class="container">   
    <div style="border-bottom: 1px solid black"> 
        <i class='glyphicon glyphicon-earphone'></i> <b>(82) 98844-3706</b><br>
        <i class='glyphicon glyphicon-envelope'></i> <b>contato@familiamedino.com.br</b><br>
       </div>
       <h2>Se interessou por algo em nosso site?</h2>
       <h3>Mande-nos uma mensagem:</h3>
       {!! Form::open(['method'=>'POST', 'action'=>'ContatoController@store', 'class'=>'form-horizontal']) !!}
       
        <div class="form-group">
        <label class="control-label col-sm-2">Nome:</label>
        <div class="col-sm-10">
          <input type="text" name="nome" class="form-control" placeholder="" required>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2">Telefone:</label>
        <div class="col-sm-10">
          <input type="tel" name="tel" class="form-control" placeholder="" required>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Mensagem:</label>
        <div class="col-sm-10">
          <textarea name="mensagem" class="form-control" placeholder=""></textarea>
        </div>
        </div>

        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </div>
        </div>
               
       {!! Form::close() !!}
</div>

@endsection