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

        @foreach($books as $isbn => $book)

            <div class="col-3 book-item">

                {{--
                Los componentes en blade deben almacenarse en resources/views/components
                La sintaxis para llamar a un componente es:

                <x-nombreComponente :param1="" :param2="" />
                --}}

                <x-bookCard :isbn="$isbn" :book="$book" />

            </div>

        @endforeach

    </section>

@endsection
