?php 
require_once "validador_acesso.php";
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>2ª Experiência de Aprendizagem</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="./assets/logo.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
        Shopping Vendas
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-exit-text">
          sair
          </a>
        </li>
      </ul>
    </nav> 
    <div class="home-container">
          <img src="./assets/vendidios.jpg" alt="vendas" class="home-img">
    
    <div class="card-container">
        <div class="home-card">
          <a href="#" >
            <img src="./assets/computadores.jpg" alt="computadores">
          </a>
        </div>
        <div class="home-card">
          <a href="#" >
            <img src="./assets/games.jpg" alt="computadores">
          </a>
        </div>
        <div class="home-card">
          <a href="#" >
            <img src="./assets/pessoais.jpg" alt="computadores">
          </a>
        </div>
        <div class="home-card">
          <a href="#" >
            <img src="./assets/casa.jpg" alt="computadores">
          </a>
        </div>
    </div>
    </div>  
  </body>
</html>