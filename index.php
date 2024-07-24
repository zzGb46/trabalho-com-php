<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <!-- COMEÇO -->
    <header>
       <?php require_once('conteudo/topo.php') ?> 
    </header>

    <main>
        <!-- SEGUNDA PARTE SERVIÇOS -->
        <section>
            <?php require_once('conteudo/servicos.php') ?>
        </section>

<!-- TERCEIRA PARTE PROJETOS -->
        <section>
            <?php require_once('conteudo/projetos.php') ?> 
        </section>

    <!-- QUARTA PARTE O QUE FAZEMOS? -->
        <section>
            <?php require_once('conteudo/fazeres.php') ?>
        </section>

        <!-- QUINTA PARTE AVALIAÇÕES -->
        <section>
            <?php require_once('conteudo/avaliacao.php') ?>
        </section>
        
        <!-- SEXTA PARTE FORMULÁRIO -->
        <section>
           <?php require_once('conteudo/formulario.php') ?>
        </section>

    </main>

    <!-- SETIMA PARTE RODAPÉ -->
    <footer>
        <section>
            <?php require_once('conteudo/rodape.php') ?>
        </section>
    </footer>
</body>

</html>