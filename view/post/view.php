<html>
    <head>
        <title>PDO + Patterns</title>
    </head>
    <body>
        <h1>Editar Post</h1>
        <p>Título: <?= $post[0]->getTitle() ?></p>
        <p>Conteúdo: <?= $post[0]->getContent() ?></p>
        <a href="./index.php?controller=posts&action=index">Voltar</a>
    </body>
</html>