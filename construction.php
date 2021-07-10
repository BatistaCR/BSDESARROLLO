<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Hello, world!</title>

  </head>

  <style>

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap');

    body{
        height: 100vh;
        background: linear-gradient(rgb(22, 22, 22), rgb(0, 0, 0));
    }    

    .padre{
        height: 100%;
        color: #ffffff;
    }

    h1, h2, h3, h4, h5, h6, p, a, span{
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        line-height: 75%;
        margin: 0;
        padding: 0;
        
    }

    /*COLORES*/

    .cr-white{color: rgb(255, 255, 255);}
    .cr-black{color: rgb(0, 0, 0);}
    .cr-yellow{color: rgb(255, 150, 0);}
    .cr-red{color: rgb(255, 55, 55);}
    .cr-blue{color: rgb(0, 100, 255);}
    .cr-green{color: rgb(20, 200, 20);}

    .bc-white{background-color: rgb(255, 255, 255);}
    .bc-black{background-color: rgb(0, 0, 0);}
    .bc-yellow{background-color: rgb(255, 150, 0);}
    .bc-red{background-color: rgb(255, 55, 55);}
    .bc-blue{background-color: rgb(0, 100, 255);}
    .bc-green{background-color: rgb(20, 150, 20);}

    /*GROSOR DE FUENTE*/
    .fw-01{font-weight: 200;}

    .fw-02{font-weight: 300;}

    .fw-03{font-weight: 400;}

    .fw-04{font-weight: 500;}

    .fw-05{font-weight: 700;}

    .fw-06{font-weight: 900;}


    /*TAMAÑO DE FUENTE*/
    .fs-01{font-size: 0.5rem;}

    .fs-02{font-size: 1rem;}

    .fs-03{font-size: 1.5rem;}

    .fs-04{font-size: 2rem;}

    .fs-05{font-size: 2.5rem;}

    .fs-06{font-size: 3rem;}

    .fs-07{font-size: 3.5rem;}

    .fs-08{font-size: 4rem;}
    
    .fs-09{font-size: 4.5rem;}

    .fs-10{font-size: 5rem;}

/*ALINEADO DE TEXTO*/    

    .ta-start{text-align: start;}
    .ta-center{text-align: center;}
    .ta-end{text-align: end;}
    .ta-justify{text-align: justify;}




/*DISPLAYS*/

.dp-flex{display: flex;}

.dp-in-block{
    display: inline-block;
}

/*FLEX CONTAINERS*/



/*DIRECCION*/
.fd-row{display: flex; flex-direction: row;}
.fd-row-reverse{display: flex; flex-direction: row-reverse;}
.fd-column{display: flex; flex-direction: column;}
.fd-col-reverse{display: flex; flex-direction: column-reverse;}

/*WRAP*/
.fx-wrap{flex-wrap: wrap;}

/*JUSTIFICADOS*/
.jc-start{display: flex; justify-content: flex-start;}
.jc-center{display: flex; justify-content: center;}
.jc-end{display: flex; justify-content: flex-end;}
.jc-around{display: flex; justify-content: space-around;}
.jc-between{display: flex; justify-content: space-between;}
.jc-evenly{display: flex; justify-content: space-evenly;}

/*ALINEAMIENTOS*/
.ai-start{display: flex; align-items: flex-start;}
.ai-center{display: flex; align-items: center;}
.ai-end{display: flex; align-items: flex-end;}
.ai-stretch{display: flex; align-items: stretch;}
.ai-baseline{display: flex; align-items: baseline;}

/*JUSTIFICADO Y ALINEAMIENTO*/
.ja-start{display: flex; justify-content: flex-start; align-items: flex-start;}
.ja-center{display: flex; justify-content: center; align-items: center;}
.ja-end{display: flex; justify-content: flex-end; align-items: flex-end;}


/*FLEX ITEMS*/

/*MARGINS*/

.mt-01{margin-top: 0.5rem;}
.mt-02{margin-top: 1rem;}
.mt-03{margin-top: 1.5rem;}
.mt-04{margin-top: 2rem;}
.mt-05{margin-top: 2.5rem;}
.mt-06{margin-top: 3rem;}
.mt-07{margin-top: 3.5rem;}
.mt-08{margin-top: 4rem;}
.mt-09{margin-top: 4.5rem;}
.mt-10{margin-top: 5rem;}

.mr-01{margin-right: 0.5rem;}
.mr-02{margin-right: 1rem;}
.mr-03{margin-right: 1.5rem;}
.mr-04{margin-right: 2rem;}
.mr-05{margin-right: 2.5rem;}
.mr-06{margin-right: 3rem;}
.mr-07{margin-right: 3.5rem;}
.mr-08{margin-right: 4rem;}
.mr-09{margin-right: 4.5rem;}
.mr-10{margin-right: 5rem;}

.mb-01{margin-bottom: 0.5rem;}
.mb-02{margin-bottom: 1rem;}
.mb-03{margin-bottom: 1.5rem;}
.mb-04{margin-bottom: 2rem;}
.mb-05{margin-bottom: 2.5rem;}
.mb-06{margin-bottom: 3rem;}
.mb-07{margin-bottom: 3.5rem;}
.mb-08{margin-bottom: 4rem;}
.mb-09{margin-bottom: 4.5rem;}
.mb-10{margin-bottom: 5rem;}

.ml-01{margin-left: 0.5rem;}
.ml-02{margin-left: 1rem;}
.ml-03{margin-left: 1.5rem;}
.ml-04{margin-left: 2rem;}
.ml-05{margin-left: 2.5rem;}
.ml-06{margin-left: 3rem;}
.ml-07{margin-left: 3.5rem;}
.ml-08{margin-left: 4rem;}
.ml-09{margin-left: 4.5rem;}
.ml-10{margin-left: 5rem;}

.my-01{margin-top: 0.5rem; margin-bottom: 0.5rem;}
.my-02{margin-top: 1rem; margin-bottom: 1rem;}
.my-03{margin-top: 1.5rem; margin-bottom: 1.5rem;}
.my-04{margin-top: 2rem; margin-bottom: 2rem;}
.my-05{margin-top: 2.5rem; margin-bottom: 2.5rem;}
.my-06{margin-top: 3rem; margin-bottom: 3rem;}


.mx-01{margin-left: 0.5rem; margin-right: 0.5rem;}
.mx-02{margin-left: 1rem; margin-right: 1rem;}
.mx-03{margin-left: 1.5rem; margin-right: 1.5rem;}
.mx-04{margin-left: 2rem; margin-right: 2rem;}
.mx-05{margin-left: 2.5rem; margin-right: 2.5rem;}
.mx-06{margin-left: 3rem; margin-right: 3rem;}



.mf-01{margin: 0.5rem 0.5rem;}
.mf-02{margin: 1rem 1rem;}
.mf-03{margin: 1.5rem 1.5rem;}
.mf-04{margin: 2rem 2rem;}
.mf-05{margin: 2.5rem 2.5rem;}
.mf-06{margin: 3rem 3rem;}

/*PADDINGS*/
.pt-01{padding-top: 0.5rem;}
.pt-02{padding-top: 1rem;}
.pt-03{padding-top: 1.5rem;}
.pt-04{padding-top: 2rem;}
.pt-05{padding-top: 2.5rem;}
.pt-06{padding-top: 3rem;}
.pt-07{padding-top: 3.5rem;}
.pt-08{padding-top: 4rem;}
.pt-09{padding-top: 4.5rem;}
.pt-10{padding-top: 5rem;}

.pr-01{padding-right: 0.5rem;}
.pr-02{padding-right: 1rem;}
.pr-03{padding-right: 1.5rem;}
.pr-04{padding-right: 2rem;}
.pr-05{padding-right: 2.5rem;}
.pr-06{padding-right: 3rem;}
.pr-07{padding-right: 3.5rem;}
.pr-08{padding-right: 4rem;}
.pr-09{padding-right: 4.5rem;}
.pr-10{padding-right: 5rem;}

.pb-01{padding-bottom: 0.5rem;}
.pb-02{padding-bottom: 1rem;}
.pb-03{padding-bottom: 1.5rem;}
.pb-04{padding-bottom: 2rem;}
.pb-05{padding-bottom: 2.5rem;}
.pb-06{padding-bottom: 3rem;}
.pb-07{padding-bottom: 3.5rem;}
.pb-08{padding-bottom: 4rem;}
.pb-09{padding-bottom: 4.5rem;}
.pb-10{padding-bottom: 5rem;}

.pl-01{padding-left: 0.5rem;}
.pl-02{padding-left: 1rem;}
.pl-03{padding-left: 1.5rem;}
.pl-04{padding-left: 2rem;}
.pl-05{padding-left: 2.5rem;}
.pl-06{padding-left: 3rem;}
.pl-07{padding-left: 3.5rem;}
.pl-08{padding-left: 4rem;}
.pl-09{padding-left: 4.5rem;}
.pl-10{padding-left: 5rem;}

.py-01{padding-top: 0.5rem; padding-bottom: 0.5rem;}
.py-02{padding-top: 1rem; padding-bottom: 1rem;}
.py-03{padding-top: 1.5rem; padding-bottom: 1.5rem;}
.py-04{padding-top: 2rem; padding-bottom: 2rem;}
.py-05{padding-top: 2.5rem; padding-bottom: 2.5rem;}
.py-06{padding-top: 3rem; padding-bottom: 3rem;}


.px-01{padding-left: 0.5rem; padding-right: 0.5rem;}
.px-02{padding-left: 1rem; padding-right: 1rem;}
.px-03{padding-left: 1.5rem; padding-right: 1.5rem;}
.px-04{padding-left: 2rem; padding-right: 2rem;}
.px-05{padding-left: 2.5rem; padding-right: 2.5rem;}
.px-06{padding-left: 3rem; padding-right: 3rem;}

.pf-01{padding: 0.5rem 0.5rem;}
.pf-02{padding: 1rem 1rem;}
.pf-03{padding: 1.5rem 1.5rem;}
.pf-04{padding: 2rem 2rem;}
.pf-05{padding: 2.5rem 2.5rem;}
.pf-06{padding: 3rem 3rem;}

/*PAGE CODE*/

.clock{
    width: 100px;
    height: 100px;
    border: solid 3px rgb(255, 150, 0);
  border-radius: 10%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 1rem;
  flex-direction: column;
}

.logo{
        height: 100px;
        width: auto;
    }


.btn-sub {
  padding: 10px 20px;
  background-color: transparent;
  border-radius: 0.5rem;
  border: 2px solid #fff;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.btn-sub::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000000;
  background: -webkit-linear-gradient(180deg, #242424, #1a1a1a, #000000);
  background: -o-linear-gradient(180deg, #242424, #1a1a1a, #000000);
  background: -moz-linear-gradient(180deg, #242424, #1a1a1a, #000000);
  background: linear-gradient(180deg, #242424, #1a1a1a, #000000);
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  opacity: 0;
}

.btn-sub:hover:before {
  opacity: 1;
}

.footer{
    bottom: 0;
    position: absolute;
}

.bg-grt-black{background: #000000;
  background: linear-gradient(180deg, #242424, #1a1a1a, #000000);}

  .bg-grt-white{background: #aaaaaa;
  background: linear-gradient(180deg, #ffffff, #e7e7e7, #aaaaaa);}

  .bg-grt-yellow{background: rgb(255, 150, 0);
  background: linear-gradient(180deg, #ffb700, #bb8900, rgb(153, 89, 0) );}

  .ml-email{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1rem;
    border-radius: 1rem;
    background: rgb(255, 150, 0);
  background: linear-gradient(180deg, #ffb700, #bb8900, rgb(153, 89, 0) );
  color: #ffffff;
  width: 100%;
  }

  .ml-header{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      width: 100%;
  }

  .ml-body{
      width: 100%;
  }

  .ml-btn{
      color: rgb(255, 255, 255);
      border: 1px solid transparent;
  }

  .ml-btn:hover{
      background-color: rgba(219, 219, 219, 0.24);
      transition: ease-in;
      transition-duration: 0.25s;
  }
</style>


  <body>
    <div class="padre ja-center">
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
                            Launch static backdrop modal
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
          <button type="button" class="btn btn-lg ml-btn bc-black mf-03 px-06 py-02" data-bs-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-lg ml-btn bc-blue mf-03 px-06 py-02">ENVIAR</button>
        </div>
      </form>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="js/validacion.js"></script>
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->

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
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->

<!--===============================================================================================-->

  </body>
</html>