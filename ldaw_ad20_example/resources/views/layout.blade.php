<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>@yield("pageTitle")</title>

        @section("javascript")
            <!-- JQUERY -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        @show

        @section("css")
            <!-- Bootstrap --->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <!-- main css -->
            <link rel="stylesheet" href="<?php echo url('/css/main.css'); ?>" />
        @show

    </head>

    <body>

        <header class="container-fluid">
            <h1>APP de Ejemplo LDAW</h1>
        </header>

        @section("mainNavigation")
            <x-mainNav />
        @show

        <main class="container-fluid">

            {{-- Inyectar el contenido principal --}}
            @yield("mainContent")

        </main>

        <footer class="container-fluid">
            <p>Erik Sánchez - LDAW AD20</p>
        </footer>

    </body>
</html>
