<?php
$matricula = filter_input(INPUT_POST, 'mat');
$senha = filter_input(INPUT_POST, 'senha');
error_reporting(E_ERROR);
if (isset($matricula)) {
    $usuarios = [
        [
            "nome" => "Kleber Lima",
            "email" => "kleber@hotmail.com",
            "matricula" => "301234567",
            "senha" => "123456"
        ],
        [
            "nome" => "Denise Souza",
            "email" => "denise@hotmail.com",
            "matricula" => "309876543",
            "senha" => "654321"
        ],
    ];

    foreach ($usuarios as $usuario) {
        $matValida = $matricula === $usuario['matricula'];
        $senhaValida = $senha === $usuario['senha'];

        if ($matValida && $senhaValida) {
            $_SESSION['error'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $_SESSION['mat'] = $usuario['matricula'];
            $_SESSION['e-mail'] = $usuario['email'];
            
            $exp = time() + 60*60*24;
            setcookie('usuario',$usuario['nome'],$exp);
            setcookie('mat',$usuario['matricula'],$exp);
            setcookie('e-mail',$usuario['email'],$exp);
            
            header('Location: logado.php');
            
        }
    }
    if (!$_SESSION['usuario']) {
        $_SESSION['error'] = ['Matrícula ou Senha inválida!'];
    }
}
?>
<main class="main-content">
    <div id="main-box">
        <div id="border-id">
            <img src="https://images.unsplash.com/photo-1569242840510-9fe6f0112cee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Imagem para Login">
        </div>
        <div>
            <form action="#" id="formulario" method="POST">
                <?php if ($_SESSION['error']): ?>
                    <div class="error">
                        <?php foreach ($_SESSION['error'] as $erro): ?>
                            <p><?= $erro ?></p>
                        <?php endforeach ?>    
                    </div>
                <?php endif ?>
                <label for="nome">Matrícula</label>
                <div><span><img src="https://img.icons8.com/ios-glyphs/30/000000/policeman-male.png"/></span><input type="text" name="mat" id="nome"></div>

                <label for="senha">Senha</label>
                <div><span><img src="https://img.icons8.com/ios-glyphs/30/000000/handcuffs.png"/></span><input type="password" name="senha" id="senha"></div>
                <button>Entrar</button>
            </form>
        </div>


    </div>
</main>


