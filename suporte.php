<?php 
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Suporte</title>
    <link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 
    <script src="suporte.js"></script>
</head>

<body>

    <div class="titSuporte">
        <h1>Página de Suporte</h1>
    </div>
        <!-- Page Content  -->
        <div id="content">  
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <center>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul  class="nav navbar-nav ml-auto">
                                <li  class="nav-item active">
                                    <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="comecar_horta.php">Começar uma Horta</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                                </li>
                            </ul>
                        </div>
                    </center>
                    
                </div>
            </nav>
            <div class="container">
                <h1>Consulta de Mensagens no Sistema</h1>
                <form action="administrador.php" method="post">
                    <div class="container-forms">
                        <div class="col">
                          <div class="form-group col-md-6" id="signin">
                            <h4>Entrar no Sistema</h4>
                        </div>
                        <div class="col-6">
                        <label for="email">Coloque o seu email</label>
                        <input type="email" class="form-control" size="30" name="email" id="email" aria-describedby="endereco"  required="required" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <small id="email" class="form-text text-muted">Digite o seu Email</small>
                        <br>

                      </div>
                        
                        <div class="col-6">
                        <label for="mensagem">Digite a sua Senha</label>
                        <input type="password" class="form-control" name="senha" rows="5" id="senha" aria-describedby="senha" required="required"></input>
                        <small id="senha" class="form-text text-muted">Digite a sua Senha </small>
                        <button type="submit" class="btn btn-primary" name="botao" value="botao"  >Entrar no Sistema</button><br>

                        <br>
                        <br>

                      </div>    
                        </div>
                        </div>
                      </div>
                    
                    </div>
            </form>
</body>

</html>
