<?php
// Pega as informações do formulário e guarda em váriaveis
$titulo   = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$autor    = $_POST['autor'];
$data     = $_POST['data'];

// Conecta no banco de dados do jornal e seleciona a tabela
// $conexao = new PDO('{qual_banco}:host={local_que_esta_o_banco};dbname={nome_do_banco}', '{usuario}', '{senha}');
try {
    $conexao = new PDO('mysql:host=localhost;dbname=jornal', 'root', '');
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Cria a SQL (solicitacao) para inserir os dados no banco
$sql = "INSERT INTO noticias 
                (
                    titulo, 
                    conteudo, 
                    autor, 
                    data
                ) 
            VALUES
                (
                    '$titulo',
                    '$conteudo',
                    '$autor',
                    '$data'
                )
            ";

// Executa a SQL no banco de dados conectado
$resposta = $conexao->exec($sql);

// Verifica se a SQL foi executada com sucesso
if ($resposta) {
    $situacao_cadastro = "Noticia cadastrada com sucesso!";
} else {
    $situacao_cadastro = "Erro ao cadastrar noticia!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de cadastro</title>

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
    </style>
</head>

<body>
    <h1>Confirmação de cadastro</h1>

    <h3><?= $situacao_cadastro ?></h3>

    <a href="index.php">Voltar ao início</a>
</body>

</html>