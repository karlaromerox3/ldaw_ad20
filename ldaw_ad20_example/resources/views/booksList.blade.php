<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Catálogo de libros</title>
    </head>
    <body>

        <h1>Catálogo de libros</h1>

        <?php foreach($books as $id => $book){ ?>

            <div class="">
                <strong>Título: </strong><?php echo $book["title"]; ?><br/>
                <strong>Autor: </strong><?php echo $book["author"]; ?>
            </div>

            <hr/>

        <?php } ?>

    </body>
</html>
