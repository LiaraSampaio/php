<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contatos</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>

<!--Usando Bulma framework-->

<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Formulário de Contato</h1>
                    <form action="enviar.php" method="POST">
                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input type="text" name="nome" class="input" placeholder="Seu nome...">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email *</label>
                            <div class="control">
                                <input type="email" name="email" class="input" placeholder="Seu email...">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Assunto</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="assunto">
                                        <option>Reportar erro</option>
                                        <option>Anúncios</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Mensagem *</label>
                            <div class="control">
                                <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link is-medium">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>