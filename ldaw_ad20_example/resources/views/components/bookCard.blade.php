<div class="card rounded">
  <img class="card-img-top" src="{{ url('img/books/' . $isbn . ".jpg") }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $book["title"] }}</h5>
    <p class="card-text">{{ implode(", ", $book["authors"]) }}</p>
    <a href="#" class="btn">Ver Detalle</a>
  </div>
</div>
