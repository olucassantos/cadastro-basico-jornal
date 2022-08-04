<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Notícia</title>

        <style>
            body {
                background-color: #181945;
            }

            a {
                color: #fff;
                text-decoration: none;
                border: 1px solid #fff;
                padding: 10px;
            }

            h1 {
                color: #fff;
            }

            form div{
                color: #fff;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Cadastre a nova notícia</h1>

        <form method="POST" action="salvar_noticia.php">
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo">
            </div>

            <div>
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor">
            </div>

            <div>
                <label for="data">Data</label>
                <input type="date" name="data" id="data">
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>