<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    
    <div class="container text-left"> <h1>Exercício com Bootstrap</h1>
        <div class="row align-items-middle">
          <div class="col-2 bg-secondary-subtle border border-success-subtle">
            <p>Preencha o formulário ao lado com as suas informações.</p>
            <p>Seus dados não serão compartilhados com terceiros</p>

          </div>
          <div class="col">
            <div class="mb-3">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" aria-label="Last name"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu usuário">
                            <label for="exampleFormControlInput1" class="form-label">Senha</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua senha">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Cadastrar</button>
                        </div>
                    </div>
                </div>
                
                  
            </div>
          </div>
          
        </div>
      </div>

  </body>
</html>