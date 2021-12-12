<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Escenario en php</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css"/>
    </head>
    <body class="bg-dark">
        <h1 class="text-center text-white text-uppercase">Escenario</h1>
        <?php
        // jhon anderson puentes hernandez evidencia 4 sena
        $puestos = [["L","L","L","L","L"],["L","L","L","L","L"],["L","L","L","L","L"],["L","L","L","L","L"],["L","L","L","L","L"]];
        
        include("library/procesar_arreglo.php");
        include("library/presentar_datos.php");
        if(isset($_POST["puestos"])){
            $puestos = acomodar(explode(" ", $_POST["puestos"]));
        }
        if(isset($_POST["ticket"])){
          $puestos = Procesar($puestos, $_POST["fila"],$_POST["columna"] ,$_POST["ticket"]);
         
        }
     
       
        ?>
         
        <div class="col-6 mx-auto">
            <table class="table table-dark table-striped text-centert">
                <thead>
                    <tr>
                        <th> </th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                   
                </thead>
                <tbody>
                    
                    <?php imprimir($puestos) ?>
                    
                </tbody>
            </table>
    </div>
            
        <form action="index.php" class="text-center col-6 mx-auto text-white" method="POST">
          <label for="ticket" class="form-label">Selecione el estado</label>
            <select name="ticket" class="form-select">
                <option value="V">Vendido</option>
                <option value="L">Libre</option>
                <option value="R">Reservado</option>

            </select>
           <label for="fila" class="form-label">Fila</label>
           <input type="number" min="1" max="5" id="fila" class="form-control" name="fila" aria-describedby="passwordHelpBlock" required> 
<div id="passwordHelpBlock" class="form-text">
    la fila deber estar entre 1 a 5
</div>
           
              <label for="columna" class="form-label">Puesto</label>
           <input  type="number" min="1" max="5" id="columna" class="form-control" name="columna" aria-describedby="passwordHelpBlock" required>
<div id="passwordHelpBlock" class="form-text">
    El Puesto deber estar entre 1 a 5
</div>
           
           <input type="submit"  value="Reservar" class="btn btn-success"  />
           <textarea name="puestos" readonly hidden><?php
                        foreach ($puestos as $p){
                          echo implode(" ", $p);
                          echo " ";
                        }
                ?>
</textarea>
        </form>

        <?php
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</html>
