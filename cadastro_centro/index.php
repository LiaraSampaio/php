<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB cadastro</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Tela de Login / Acesso</h1>
                    <hr>
                    <form action="login.php" method="POST">
                        <div class="field">
                            <label class="label">Usuário</label>
                            <div class="control">
                                <input type="text" name="usuario" class="input" placeholder="Seu usuario">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Senha</label>
                            <div class="control">
                                <input type="password" name="senha" class="input" placeholder="Sua senha">
                            </div>
                        </div>
                        <br>
                        <div class="field is-grouped columns is-centered">
                            <div class="control">
                                <button class="button is-link is-medium">Entrar</button>
                            </div>
                        </div>
                        <br>
                        <a class="columns is-centered" href="cadastrousuario.html">Cadastrar-se</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>