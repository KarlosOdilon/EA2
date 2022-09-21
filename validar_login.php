<?php

session_start();

$usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'karlosodilon@gmail.com', 'senha' => '12345'),
    array('email' => 'fulano@teste.com', 'senha' => 'abcd')
);


foreach($usuarios_app as $user){
  
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';

        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
      }

?>