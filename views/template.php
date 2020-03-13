<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"> <!-- BOOTSTRAP.CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"> <!-- FOLHA DE ESTILOS PRÓPRIA (STYLE.CSS) -->
    <title>Document</title>
</head>
<body>
    <!-- CABEÇALHO DO SITE (HEADER) -->
    <header>
        <div class="bg-dark p-1">
            <div class="container text-light">
                <a href="<?php echo BASE_URL; ?>">Loja Virtual 1.0</a>
            </div>
        </div>
    </header>

    <!-- CONTEUDO DO SITE (ex: SECTION) -->
    <?php $this->loadView($viewName, $viewData) ?>

    <!-- RODAPÉ DO SITE (FOOTER) -->
    <footer class="w-100">
    <div class="bg-dark p-1">
        <div class="container text-light text-center">
            <h6>&copy; Todos os Direitos Reservados</h6>
        </div>
    </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script><!-- JQUERY.JS -->
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script> <!-- BOOTSTRAP.JS -->
    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script> <!-- SCRIPT PRÓPRIO (SCRIPT,JS) -->
</body>
</html>
