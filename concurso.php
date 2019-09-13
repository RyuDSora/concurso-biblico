<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Concurso</title>
</head>
<body class="bg-info text-white">
<ul class="nav justify-content-end flex-row">
  <li class="nav-item">
    <a class="nav-link active" href="../concursobiblico">
        <i class="fas fa-home"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-search-plus"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fas fa-search-minus"></i></a>
  </li>
  <li class="nav-item">
    <select name="" id="preg">
        <option value="1"><a href="">1</a></option>
        <option value="2">2</option>
    </select>
  </li>
</ul>
    <div class="container-fluid align-middle">
        <div class="row">
            <div class="col">
                <div class="align-middle mt-5 mb-5">
                    <h1 class="text-center font-weight-bold">Concurso Bíblico XV</h1>
                    <h3 class="text-center font-italic">Alfa y Omega</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 ml-5"><img src="img/preguntas.png" alt="responsive image" class="rounded "></div>
            <div class="col-5" id="pregunta">
                <div class="border border-dark mb-5">
                    <p class="justify-content-center mb-0" style="text-align: center;" id="num-preg">10</p>
                    <p id="parrafo-pregunta" class="pl-2 pr-2">¿Según la carta de Filemón  Cuál era el privilegio que gozaba Pablo A pesar de estar preso?</p></div>
                <div class="mt-5 justify-content-center " style="text-align: center;" id="contador" >
                    <div class="mx-auto"><button class="btn btn-success rounded-circle"> <span id="contador" value="10" >10</span> </button> </div>
                </div>
                <div class="border border-dark mb-5" style=" display:none">
                    <p class="justify-content-center mb-0" style="text-align: center;">Respuesta</p>
                    <p id="parrafo-pregunta" class="pl-2 pr-2">Gozaba del privilegio de salir acompañado de un guardia de la prisión.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>