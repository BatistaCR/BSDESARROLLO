<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>

  </head>

  <body>
    <div class="padre ja-center cr-white">
        <div class="row">
            <div class="col ta-center">
                <h1 class="fw-06 fs-06">BIENVENIDO A</h1>
                <img class="logo my-06" src="images/logo.png" alt="logo">
                <p class="fs-04">Estamos <span class="cr-yellow"> construyendo </span> nuestro sitio web</p>

                <div class="fx-wrap ja-center my-06 cd100">
                    
                    <div class="col-3 clock ">
                        <span class="fs-06 fw-05 mb-02 days">35</span>
                        <span class="fs-03">Días</span>
                    </div>
    
                    <div class="col-3 clock">
                        <span class="fs-06 fw-05 mb-02 hours">17</span>
                        <span class="fs-03">Horas</span>
                    </div>
    
                    <div class="col-3 clock">
                        <span class="fs-06 fw-05 mb-02 minutes">50</span>
                        <span class="fs-03">Min</span>
                    </div>
    
                    <div class="col-3 clock ">
                        <span class="fs-06 fw-05 mb-02 seconds">39</span>
                        <span class="fs-03">Sec</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">                             
                        <button type="button" class="btn-sub cr-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Contáctanos aquí
                          </button>
                          
            </div>
            </div>
            </div>
        </div>  
        <footer class="footer mb-05">
            <a href="https://bsdesarrollo.com">
                <p class="cr-white"> 2021 |<span class="cr-yellow"> BS</span>DESARROLLO </p>
            </a>
        </footer>
        </div>
    
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content ml-email">
        <div class="ml-header">
          <h5 class="my-02 fs-06 fw-06 cr-black"> CONTÁCTANOS</h5>
          <p class="fs-03 mb-05">Y MANTENTE INFORMADO</p>
        </div>
        <form class="col-12 needs-validation" action="email.php" method="POST" novalidate>
        <div class="ml-body ja-center fd-column">
              <div class="mb-05 col-8 form-floating">
                <input type="email" name="correo" class="form-control" id="inputcorreo" placeholder="name@example.com" required>
                <label class="cr-black" for="inputcorreo">Tu Correo</label>
                <div class="invalid-feedback cr-white">
                  Por favor, ingrese una dirección de correo electrónico válida.
                </div>
              </div>
              <h5 class="ta-center mb-02">¿CÓMO PODEMOS AYUDARTE?</h5>
              <div class="mb-3 col-8 form-floating">
                <textarea class="form-control" name="comentario" placeholder="Déjanos un comentario" id="textareacomentario" style="height: 100px" required></textarea>
                <label class="cr-black" for="textareacomentario">Comentarios</label>
                <div class="invalid-feedback cr-white">
                  Por favor, envíanos tu opinión.
                </div>
              </div>
        </div>
        <div class="col-12 ja-center">
          <button type="button" class="bn bn-black mf-03 px-06 py-02" data-bs-dismiss="modal">CERRAR</button>
          <button type="submit" class="bn cr-white bc-blue mf-03 px-06 py-02">ENVIAR</button>
        </div>
      </form>
      </div>
    </div>
  </div>


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/validacion.js"></script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  	<script src="vendor/countdowntime/countdowntime.js"></script>
  	<script>
		$('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: ""
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
  
  </body>
</html>