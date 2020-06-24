<?php

include ("data.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ahimsa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="vendor/video-js.min.css" rel="stylesheet">
    <script src="vendor/video.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="vendor/css/full-slider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/css/style.css" />



  </head>

  <body onload="mostrarmenu()">

    <a href="#" id="toggle" class="toggle" onclick="mostrarmenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
    </a>

    <div id="sidebar" class="sidebar">
        <div class="contact" style="font-size: 18px;">
            <a class="btn btn-primary btn-lg" href="javascript:void(0)" onclick="mostrarcontacto()">Contáctanos</a>
        </div>
        <div class="Promos" align="center">
            <div class="separador"></div>
            <h3>Conocé nuestras promos</h3>
            <div class="separador"></div>
            <div class="row" >

                <?php
                for($i=0; $i<count($videos); $i++)
                {
                  ?>
                    <div class='col-4'">
                      <a href='javascript:void(0)' onclick='mostrarvideo("<?php echo $videos[$i][2]; ?>")'><img class='card-img-top' src='<?php echo $videos[$i][1]; ?>' alt=''></a>
                      <p><?php echo $videos[$i][0]; ?></p>
                    </div>
                <?php
                }//end for
                ?> 
            </div>
        </div>
        <div class="separador"></div>
        <div class="logo"> 
          <div class="row" >
            <div class='col-2'></div>
            <div class='col-8'>
              <img class='card-img-top2' src='logo.png' alt=''>
            </div>
            <div class='col-2'></div>
          </div>
        </div>
    </div>

    <div id="contacto" class="contacto">
        <a href="#" class="boton-cerrar" onclick="mostrarmenu()">&times;</a>
        <div class="contact">
            <p><b>Dejanos tus datos para recivbr más info</b></p>
        </div>
        <div class="formulario">
        <form name="formulario1" id="formulario1" action="getinfo.php" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput"><b>Nombre</b></label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" placeholder="Tu nombre" onclick="mostrarteclado(this.id)" required="">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2"><b>E-mail</b></label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="mail" placeholder="Tu e-mail" onclick="mostrarteclado(this.id)" required="">
          </div>
          <div align="center">
            <button type="button" class="btn btn-secondary" onclick="mostrarmenu()">Cancelar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
        </div>

        <div class="separador"></div>

        <div id="teclado" align="center">
            <div class="teclado"> 
                <ul id="keyboard">
                <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
                <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
                <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
                <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
                <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
                <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
                <li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
                <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
                <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
                <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
                <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
                <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
                <li class="delete lastitem">Borrar</li>
                <li class="tab">tab</li>
                <li class="letter">q</li>
                <li class="letter">w</li>
                <li class="letter">e</li>
                <li class="letter">r</li>
                <li class="letter">t</li>
                <li class="letter">y</li>
                <li class="letter">u</li>
                <li class="letter">i</li>
                <li class="letter">o</li>
                <li class="letter">p</li>
                <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
                <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
                <li class="capslock">Mayus</li>
                <li class="letter">a</li>
                <li class="letter">s</li>
                <li class="letter">d</li>
                <li class="letter">f</li>
                <li class="letter">g</li>
                <li class="letter">h</li>
                <li class="letter">j</li>
                <li class="letter">k</li>
                <li class="letter">l</li>
                <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
                <li class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
                <li class="left-shift">shift</li>
                <li class="letter">z</li>
                <li class="letter">x</li>
                <li class="letter">c</li>
                <li class="letter">v</li>
                <li class="letter">b</li>
                <li class="letter">n</li>
                <li class="letter">m</li>
                <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
                <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
                <li class="symbol"><span class="off">/</span><span class="on">\</span></li>
                <li class="space lastitem">&nbsp;</li>
            </ul>
            </div>
          </div>

          <div class="separador"></div>
          <div class="logo"> 
            <div class="row" >
              <div class='col-2'></div>
              <div class='col-8'>
                <img class='card-img-top2' src='logo.png' alt=''>
              </div>
              <div class='col-2'></div>
            </div>
          </div>

    </div>



    <div id="contenido">
      <header>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active" style="background-image: url('<?php echo $flayer[0]?>')"></div>
              <div class="carousel-caption d-none d-md-block"></div>
              <?php
                for($i=1; $i<count($flayer); $i++)
                {
                  ?>
                  <div class="carousel-item" style="background-image: url('<?php echo $flayer[$i]?>')"></div>
                  <div class="carousel-caption d-none d-md-block"></div>
                <?php
                }//end for
                ?> 
            </div>
          </div>
        </header>
    </div>

    <div id="videos">
        <video id="example_video" class="video-js vjs-default-skin" width="1900" height="1080"></video>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="vendor/jquery.min"></script>
    

    <script>

    var myPlayer = videojs('example_video');
    var $write;

    function mostrarmenu() {
        document.getElementById("sidebar").style.width = "25%";
        document.getElementById("contacto").style.width = "0";
        document.getElementById("toggle").style.width = "0";
        document.getElementById("contenido").style.marginLeft = "26%";
        document.getElementById("videos").style.marginLeft = "100%";
        myPlayer.pause();
    }

    function mostrarcontacto() {
        document.getElementById("sidebar").style.width = "0"; 
        document.getElementById("contacto").style.width = "25%";
        document.getElementById("toggle").style.width = "0";
        document.getElementById("contenido").style.marginLeft = "26%";
        document.getElementById("teclado").style.display = "none";
        document.getElementById('formGroupExampleInput').value = '';
        document.getElementById('formGroupExampleInput2').value = '';
    }

    function ocultar() {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("contacto").style.width = "0";
        document.getElementById("toggle").style.width = "3%";
        document.getElementById("contenido").style.marginLeft = "3.5%";
        
    }

    function mostrarvideo(video) {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("contacto").style.width = "0";
        document.getElementById("toggle").style.width = "3%";
        document.getElementById("contenido").style.marginLeft = "100%";
        document.getElementById("videos").style.marginLeft = "3.5%";
        reproducirvideo(video);
        
    }

    function mostrarteclado(input) {
        document.getElementById("teclado").style.display = "inline";
        $write = $('#'+input);
    }

    function reproducirvideo(video){
        myPlayer.src(video);
        myPlayer.ready(function() {
                myPlayer.muted(true);
                myPlayer.play();
                myPlayer.requestFullscreen();
        });

    }

    myPlayer.on('ended', function() {
        myPlayer.requestFullscreen();
        myPlayer.exitFullscreen();
        location.reload();
      });
          
    </script>

    <script type="text/javascript" src="vendor/keyboard.js"></script>

  </body>

</html>
