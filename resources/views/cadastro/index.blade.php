@extends('layout.principal')

@section('titulo','Cadastre-se')

@section('conteudo')

    <div class="container">

        <h2 class="display-4 text-muted">Cadastre-se Grátis</h2>
        <hr>

        <form action="">

          <div class="form-group">
            <label for="nome">NOME</label>
            <input class="form-control" type="text" id="validationCustom01" required placeholder="Digite seu nome">
            
            <div class="invalid-feedback">
                Por favor escolha um nome válido.
            </div>
          </div>

          <div class="form-group">
            <label for="sobrenome">SOBRENOME</label>
            <input class="form-control" type="text" id="validationCustom02" required placeholder="Digite seu sobrenome">
            <div class="invalid-feedback">
                Por favor escolha um sobrenome válido.
            </div>
          </div>
          
            <div class="form-group">
            <label for="email">EMAIL</label>
            <input class="form-control" type="email" id="nputEmail3" required placeholder="Digite seu email">
            <div class="invalid-feedback">
                Forneça um email válido.
            </div>
          </div>
       

        <div class="form-group">
            <label for="senha">SENHA</label>
            <input class="form-control" type="password" id="exampleInputPassword1" id="validationCustom05" required placeholder="Digite sua senha">
            <div class="invalid-feedback">
                Forneça uma senha válido.
            </div>
          </div>
        
          <div class="form-group">
            <p>QUAL A SUA IDADE?<br></p>
            <input type="radio" name="idade" value="18_22"> 12 a 18<br>
            <input type="radio" name="idade" value="23_30"> 18 a 28 <br>
            <input type="radio" name="idade" value="mais31"> acima de 28<br>
            </div>


        <fieldset class="form-group">
            <div class="form-group">
              <legend class="col-form-label col-sm-2 pt-0">GÊNERO</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    masculino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    feminino
                  </label>
                </div>
        
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Concorda com os termos e condições
            </label>
            <div class="invalid-feedback">
                Você deve concordar antes de enviar.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">ENVIAR</button>
      </form>
      </div>
      
      <script>
@endsection