<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bs_style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <title>bsdesarrollo.com</title>

</head>

<body>
  <div class="container-fluid cr-white pf-04 ta-center">
    <div class="row ja-center">
      <h1 class="fw-06 ts-05">BIENVENIDO A</h1>
      <img class="my-03 img logo" src="img/logo.png" alt="logo">
      <h2 class="fs-05">Estamos <span class="cr-yellow"> construyendo </span> nuestro sitio web</h2>

      <div class="fx-wrap ja-center my-04 cd100 no-lh">

        <div class="col-3 clock my-02 mx-02">
          <span class="fs-09 fw-05 mb-02" id="days"></span>
          <span class="fs-04">Días</span>
        </div>

        <div class="col-3 clock my-02 mx-02">
          <span class="fs-09 fw-05 mb-02" id="hours"></span>
          <span class="fs-04">Horas</span>
        </div>

        <div class="col-3 clock my-02 mx-02">
          <span class="fs-09 fw-05 mb-02 " id="minutes"></span>
          <span class="fs-04">Min</span>
        </div>

        <div class="col-3 clock my-02 mx-02">
          <span class="fs-09 fw-05 mb-02" id="seconds"></span>
          <span class="fs-04">Seg</span>
        </div>
      </div>
      <div class="col-12">
        <button type="button" class="bn ml-button px-06 py-03 mb-03" data-bs-toggle="modal"
          data-bs-target="#staticBackdrop">
          <p class="fs-03"> ¡CONTACTANOS <span class="cr-yellow">AQUÍ!</span> </p>
        </button>
      </div>
    </div>
  </div>
  <footer class="col-12">
        <a href="https://bsdesarrollo.com">
          <p class="cr-white fs-02"> TODOS LOS DERECHOS RESERVADOS © 2021 |<span class="cr-yellow">
              BS</span>DESARROLLO </p>
        </a>
      </footer>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content ml-email py-03">
        <div class="ml-header">
          <h3 class="ts-06 fw-06 cr-black"> CONTÁCTANOS</h3>
          <h5 class="fs-05 mb-03">Y MANTENTE INFORMADO</h5>
        </div>
        <form class="col-12 needs-validation" action="email.php" method="POST" novalidate>
          <div class="ml-body ja-center fd-column">
            <div class="mb-05 col-8 form-floating">
              <input type="email" name="correo" class="form-control" id="inputcorreo" placeholder="name@example.com"
                required>
              <label class="cr-black" for="inputcorreo">Tu Correo</label>
              <div class="invalid-feedback cr-white">
                Por favor, ingrese una dirección de correo electrónico válida.
              </div>
            </div>
            <h5 class="fs-05 ta-center mb-02">¿CÓMO PODEMOS AYUDARTE?</h5>
            <div class="mb-3 col-8 form-floating">
              <textarea class="form-control" name="comentario" placeholder="Déjanos un comentario"
                id="textareacomentario" style="height: 200px" required></textarea>
              <label class="cr-black" for="textareacomentario">Comentarios</label>
              <div class="invalid-feedback cr-white">
                Por favor, envíanos tu opinión.
              </div>
            </div>
          </div>
          <div class="d-grid gap-3 d-sm-flex ai-center jc-center mt-03 ">
            <button type="button" class="bn bn-black px-06 py-02" data-bs-dismiss="modal">CERRAR</button>
            <button type="submit" class="bn bn-white px-06 py-02">ENVIAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- SCRIPTS -->
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

  <script src="js/validacion.js"></script>

  <script src="js/countdown.js"></script>

</body>

</html>