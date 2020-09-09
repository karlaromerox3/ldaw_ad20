{{-- Indica que la vista actual hereda de otra y va a inyectar contenidos en ella --}}
@extends("layout")

@section("pageTitle", "Catálogo de libros")

@section("javascript")
    @parent
    <script src="mi_script.js"></script>
@show

{{-- Contenido principal --}}
@section("mainContent")

    <h2>Catálogo de libros</h2>

    <section class="row catalog card-group">

        <?php foreach($books as $isbn => $book){ ?>

            <div class="col-3 book-item">

                <div class="card rounded">
                  <img class="card-img-top" src="<?php echo url('img/books/' . $isbn . ".jpg");  ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $book["title"]; ?></h5>
                    <p class="card-text"><?php echo implode(", ", $book["authors"]); ?></p>
                    <a href="#" class="btn">Ver Detalle</a>
                  </div>
                </div>

            </div>

        <?php } ?>

    </section>

@endsection
