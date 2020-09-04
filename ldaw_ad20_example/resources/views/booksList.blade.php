<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Catálogo de libros</title>

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Bootstrap --->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo url('/css/main.css'); ?>" />

    </head>
    <body>

        <header class="container-fluid">
            <h1>APP de Ejemplo LDAW</h1>
        </header>

        <nav class="container-fluid">
            <ul class="row">
                <li class="col"><a href="<?php echo url('/catalogo'); ?>">Catálogo</a></li>
                <li class="col"><a href="<?php echo route('prest'); ?>">Registro de Préstamos</a></li>
                <li class="col"><a href="">Mis Préstamos</a></li>
            </ul>
        </nav>

        <main class="container-fluid">

            <h1>Catálogo de libros</h1>

            <?php foreach($books as $id => $book){ ?>

                <div class="">
                    <strong>Título: </strong><?php echo $book["title"]; ?><br/>
                    <strong>Autor: </strong><?php echo $book["author"]; ?>
                </div>

                <hr/>

            <?php } ?>

        </main>

        <footer class="container-fluid">
            <p>Erik Sánchez - LDAW AD20</p>
        </footer>

    </body>
</html>
