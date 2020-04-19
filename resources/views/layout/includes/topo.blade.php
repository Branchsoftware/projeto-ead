<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> @yield('titulo') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="btn btn-primary" href="#">Branch Cursos</a>&ensp; 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @if(Auth::guest())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Portugues</a>
                  <a class="dropdown-item" href="#">Matematica</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Mais cursos</a>
                </div>
              </li>&emsp; 
              <form class="form-inline">
                  <input class="form-control mr-sm-1" type="search" style="min-width:350px;" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
              </form>    
              @else
                <li class="nav-item">
                  <a class="nav-link" href="#">{{Auth::user()-name}}</a>
                </li>
              @endif
          </ul>  
            <a class="btn btn-outline-secondary" href="">Ensine na Branch</a>&emsp;&emsp;                
            <a class="btn btn-outline-primary" href="">Fazer Login</a>&ensp;  
            <a class="btn btn-danger" href="">Cadastre-se</a>         
        </div>
      </nav>
