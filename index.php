<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Concurso Bíblico</title>
</head>
<body>
    <div class="container-fluid bg-light align-middle">
        <div class="row">
            <div class="col">
                <div class="align-middle mt-5 mb-5">
                    <h1 class="text-center font-weight-bold">Concurso Bíblico XV</h1>
                    <h3 class="text-center font-italic">Alfa y Omega</h3>
                </div>
                <div>
                    <img src="img/ae028b8d-8fef-4739-94c3-1452c022944f.jpg" alt="Responsive image" class="rounded mx-auto d-block mb-5">
                </div>
                <div class="row ml-5 mr-5 mb-5">
                    <div class="col-2"></div>
                    <div class="col">
                        <div class="row mb-5">
                            <div class="col-2"></div>
                            <div class="col">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
                            </div>
                            <div class="col">
                                <div class="mx-auto">
                                    <a href="preguntas.php" class="btn btn-primary" role="button">
                                        <span>Ver Todo</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <a href="concurso.php" class="btn btn-primary" role="button">
                                    <span>Concurso</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div id="demo"></div>
    </div>

<!-- Modal -->
        
        <div class="modal fade mt-5 rounded-top" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Pregunta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="inp-num">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                
              <div class="modal-body">
                <form>
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Numero</label>
                      <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label" >Pregunta:</label>
                    <textarea class="form-control" id="message-text1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Respuesta:</label>
                    <textarea class="form-control" id="message-text2"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cerrar">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btn-guardar">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        




        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $("#btn-guardar").click(function() {
        if(validarNumero($("#recipient-name").val())){
            console.log("correcto");
            var parametros = "numero="+$("#recipient-name").val()+"&"+
					"pregunta="+$("#message-text1").val()+"&"+
					"respuesta="+$("#message-text2").val();
            $.ajax({
		            url:"ajax/guardardato.php",
		            data:parametros,
		            method:"POST",
		            dataType:"json",
		            success:function(respuesta){	
		            	//console.log(respuesta);
		            	//return;
		            	console.log(respuesta);
		            	if (respuesta.codigoRespuesta == 1){
		            		console.log("exito");
                        }
                        else{console.log("fallo");}	
		            }
		    });
        }
        else{
            alert("Ingrese un numero correcto");
        };
        console.log($("#recipient-name").val());
        console.log($("#message-text1").val());
        console.log($("#message-text2").val());
    });
  function validarNumero(Numero) {if (isNaN(Numero)){return false}else{ return true}};  
   
</script> 
    
</body>
</html>