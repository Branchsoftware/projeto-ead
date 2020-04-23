@extends('layout.principal')

@section('titulo','Login')

@section('conteudo')
<div class="container">
    <h2 class="display-4 text-muted">Entrar</h2>
    <hr>

    <form action="{{route('site.login.entrar')}}">

      <div class="form-group">
        <label for="nome">EMAIL</label>
        <input class="form-control" type="email" name="email" placeholder="Digite seu email" required >
      </div>
      
        <div class="form-group">
        <label for="email">EMAIL</label>
        <input class="form-control" type="password" name="password" placeholder="Digite sua senha" required >
      </div>
   
    <button class="btn btn-primary" type="submit">Entrar</button>
  </form>
  </div>
@endsection