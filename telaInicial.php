<?php
    session_start();

    //print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telaLogin.php');
    }
    $logado = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>FitNation</title>
</head>
<body>
    <?php
        echo "<h1>Acessou o site $logado</h1>";
    ?>
</body>
</html>
