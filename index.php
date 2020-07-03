<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sesiones</title>
  </head>
  <body>
    <div class="jumbotron">
          <h1 class="display-4">Sesiones!</h1>
          <p class="lead">Aqui se muestra como generar y guardar sessiones en el navegador del cliente</p>
          <hr class="my-4">
          <!--<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->
          <!--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
    </div>
    <form action="session.php" method="POST">
        <label for="usuario">Nombre de usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>