<html lang="pt-br">

<head>
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Odilon Eletros</title>
</head>

<body>
<div class="login-container">
    <div class="login-content">
        <h1>Login</h1>
        <form>
            <div class="input-email">
                <label for="name">Email:</label>
                <input type="email" id="name" placeholder="Digite seu email"/>
            </div>
            <div class="input-senha">
                <label for="name">Senha:</label>
                <input type="password" id="name" placeholder="Digite sua senha"/>
            </div>
        </div>
                <?php if(isset($_GET['email']) && $_GET['email'] == 'erro'){?>

                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>
                <?php } ?>
                <button class=".botao-entrar" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>