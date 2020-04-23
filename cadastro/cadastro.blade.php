<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <form class="needs-validation" novalidate>

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
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>