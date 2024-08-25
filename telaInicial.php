<?php
    session_start();

    //print_r($_SESSION);

    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telaLogin.php');
    }
    $logado = $_SESSION['email']; 

    $sql = "SELECT nome FROM usuarios WHERE email = '$logado'";
    $result = $conexao->query($sql);
    $row = $result->fetch_assoc();
    $nome = $row['nome'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNation</title>

    <link rel="shortcut icon" type="imagex/png" href="assets/img/icone.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cambo&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/telaInicial.css">
</head>
<body>
    <header>
        <a id="logo" href="telaInicial.php"><img src="assets/img/logo.png" alt="Logo"></a>
        <nav>
            <a href="telaInicial.php">Treino</a>
            <a href="telaDieta.php">Dieta</a>
            <a href="telaSuplemento.php">Suplementos</a>
        </nav>
        <img id="perfil" src="assets/img/perfil.png" alt="Perfil">
    </header> 

    <main>
        <div id="treino">
            <h2>TREINO</h2>
        </div>
        <div id="conteudo-treino">
            <div id="musuculo">
                <img src="assets/img/peito.png" alt="Peito">
                <h2 id="titulo-musuculo">Peito</h2>
                <h3>
                    Para um treino eficaz de peito, aqueça-se adequadamente, varie os exercícios, mantenha a 
                    forma correta e progrida gradualmente na intensidade. Descanse bem, mantenha uma dieta 
                    equilibrada e consulte um profissional para orientação.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/costas.png" alt="Costas">
                <h2 id="titulo-musuculo">Costas</h2>
                <h3>
                    Para um treino eficaz de costas, aqueça-se, faça exercícios variados como barra fixa, 
                    remada com halteres e puxada na máquina, mantenha a forma correta, aumente a intensidade
                    aos poucos, descanse bem, mantenha uma dieta saudável e consulte um profissional.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/pernas.png" alt="Perna">
                <h2 id="titulo-musuculo">Perna</h2>
                <h3>
                    Para um treino de pernas eficaz, aqueça-se bem e faça exercícios variados como agachamento,
                    avanço, leg press, extensão de pernas e flexão de pernas. Mantenha a forma correta, 
                    amplie a intensidade aos poucos, descanse o suficiente, mantenha uma alimentação 
                    equilibrada e busque orientação profissional.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/bracos.png" alt="Braços">
                <h2 id="titulo-musuculo">Braços</h2>
                <h3>
                    Para um treino de braços eficiente, aqueça-se corretamente e inclua exercícios como rosca
                    direta, rosca alternada, tríceps pulley, tríceps francês e flexão de braços. Mantenha a forma 
                    adequada, aumente a intensidade progressivamente, descanse o suficiente, mantenha uma dieta 
                    equilibrada e consulte um profissional para orientação.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/ombros.png" alt="Ombro">
                <h2 id="titulo-musuculo">Ombro</h2>
                <h3>
                    Para um treino de ombros eficaz, aqueça-se adequadamente e inclua exercícios como elevação 
                    lateral, desenvolvimento com halteres, remada alta, elevação frontal e press militar. Mantenha
                    a forma correta, aumente a intensidade gradualmente, descanse o suficiente, mantenha uma 
                    dieta equilibrada e consulte um profissional para orientação.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/divisaoTreino.png" alt="Academia">
                <h2 id="titulo-musuculo">Divisão de Treino</h2>
                <h3>
                    A divisão de treino organiza os exercícios para diferentes objetivos. Push/Pull/Legs foca em 
                    grupos musculares específicos em três dias, ideal para hipertrofia. Upper/Lower alterna treinos
                    para a parte superior e inferior do corpo, sendo eficaz para força e hipertrofia. Full Body 
                    trabalha o corpo inteiro em cada sessão, ótimo para iniciantes ou condicionamento. A escolha 
                    depende do seu objetivo e disponibilidade.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/consistencia.png" alt="Academia">
                <h2 id="titulo-musuculo">Consistência</h2>
                <h3>
                    Manter a consistência no treino exige motivação e disciplina. Para isso, é importante definir 
                    metas claras e realistas, criar uma rotina que se encaixe no seu dia a dia e celebrar pequenas
                    conquistas. Variar os exercícios ajuda a evitar a monotonia, e treinar com amigos ou em grupo 
                    pode tornar a prática mais agradável. Além disso, lembrar-se dos benefícios a longo prazo e ter 
                    paciência com o processo são essenciais para manter o foco e não desistir.
                </h3>
            </div>
            <div id="musuculo">
                <img src="assets/img/academia.png" alt="Academia">
                <h2 id="titulo-musuculo">Academia</h2>
                <h3>
                    Ao frequentar a academia, respeite o espaço e os equipamentos, cumprimente educadamente, 
                    evite monopolizar equipamentos, use roupas adequadas, mantenha higiene pessoal, foque no 
                    treino, peça ajuda quando necessário e seja respeitoso com todos. Isso cria um ambiente 
                    positivo na academia.
                </h3>
            </div>
        </div>
    </main>
    <footer>
        <div id="descricao-footer">
            <img id="descricao-image" src="assets/img/logoFooter.png" alt="LogoFooter">
            <a id="titulo-descricao" href="index.html">FitNation</a>
            <h2 id="texto-descricao" >Site de musculação onde o usuário pode armazenar seu treino, dieta, dados e receber dicas personalizadas sobre os mesmos.</h2>
        </div>

        <div id="social-footer">
            <h1 id="titulo-social">Social</h1>
            <a id="texto-social" href="https://www.instagram.com/lucas_sambati/">Instagram</a>
            <a id="texto-social" href="mailto:lucasleonardosambati@edu.unifil.br">Email</a>
        </div>

        <div id="projetos-footer">
            <h1 id="titulo-projetos">Projetos</h1>
            <a id="texto-projetos" href="https://sites.google.com/edu.unifil.br/lucas-sambati/p%C3%A1gina-inicial">Meu Portfólio</a>
        </div>

        <div id="parcerias-footer">
            <h1 id="titulo-parcerias">Parcerias</h1>
            <a id="texto-parcerias" href="https://unifil.br/">Instituto Unifil</a>
        </div>
    </footer>
</body>
</html>
