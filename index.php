<!DOCTYPE html>
<html lang="es">
<head>
  <title>Calculo De Fechas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <h1 class="text-center">Calcular Fecha</h1>
            <h4 class="text-center" id="mensaje"></h4>  
            <form method="POST" action="index.php" name="formulario1" onsubmit="return validar();">
                <select name="cbonumdia" id="cbonumdia" class="form-control">
                    <option value="">Seleccione la Posicion del dia</option>
                    <option value="1">Primer</option>
                    <option value="2">Segundo</option>
                    <option value="3">Tercer</option>
                    <option value="4">Cuarto</option>
                    <option value="5">Quinto</option>
                    <option value="a">Antepenultimo</option>
                    <option value="p">Penultimo</option>
                    <option value="u">Ultimo</option>
                </select>
                <br>
                <select name="cbodia" id="cbodia" class="form-control">
                    <option value="">Seleccione el dia</option>
                    <option value="0">Dia Habil</option>
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miercoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sabado</option>
                    <option value="7">Domingo</option>
                </select>
                <br>
                <select name="cbomes" id="cbomes" class="form-control">
                    <option value="">Seleccione Mes</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <br>
                <label for="txtannio">Año (Entre 1902-2037)</label>
                <input type="number" min="1902" max="2037" name="txtannio" id="txtannio" class="form-control">
                <br>
                <input type="submit" value="Calcular" name="btn_habil" id="btn_habil" class="btn btn-block btn-success">
            </form>
        </div>
        
        <div class="col-lg-12">
            <?php
                if(isset($_POST["btn_habil"])){

                    $dia = $_POST['cbodia'];
                    $numdia = $_POST['cbonumdia'];
                    $mes = $_POST['cbomes'];
                    $annio = $_POST['txtannio'];
                    
                    include 'calcular.php';
                    
                    MostrarFecha($dia,$numdia,$mes,$annio);

                }
            ?>
        </div>
        
    </div>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="validar.js"></script>

</body>
</html>
