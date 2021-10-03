<?php include "templates/header.php"; ?>
<?php
    include 'funciones.php';
    
        $error = false;
        $config = include 'config.php';
        
        try {
          $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
          $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        
        $titulo = isset($_POST['apellido']) ? 'Lista de alumnos (' . $_POST['apellido'] . ')' : 'Lista de alumnos';
          /*Código que obtendrá la lista de alumnos*/
          if (isset($_POST['apellido'])) {
            $consultaSQL = "SELECT * FROM alumnos WHERE apellido LIKE '%" . $_POST['apellido'] . "%'";
          } else {
            $consultaSQL = "SELECT * FROM alumnos";
          }
          
          $sentencia = $conexion->prepare($consultaSQL);
          $sentencia->execute();
          
          /*Se almacena el resultado en la variable "alumnos"*/
          $alumnos = $sentencia->fetchAll();
        
        } catch(PDOException $error) {
          $error = $error->getMessage();
        }
?>
<?php
if ($error) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_POST['apellido'])){
                ?>
                    <a class="btn btn-primary mt-4" href="index.php">Regresar al inicio</a>
                <?php
                }
                ?>
                <a href="crear.php"  class="btn btn-primary mt-4">Crear alumno</a>
                <hr/>
                <form method="post">
                  <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                     <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
                    </div>
                  </div>
                   <hr/>
                 </form>
                  <form method="get" action="editar.php" style = display:inline-block>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" id="id" name="id" placeholder="Editar por id" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                     <button type="submit" name="submitEditar" class="btn btn-primary">Editar</button>
                    </div>
                  </div>
                 </form>
                 <form method="get" action="borrar.php" style = display:inline-block>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" id="id" name="id" placeholder="Borar por id" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                     <button type="submit" name="submitBorrar" class="btn btn-primary">Borrar</button>
                    </div>
                  </div>
                 </form>
            </div>
        </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-3"><?= $titulo ?></h2>
          <table class="table">
            <thead>
                <style>
                    th, td{
                        text-align: center;
                    }
                </style>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Editar</th>
                <th>Borrar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($alumnos && $sentencia->rowCount() > 0) {
                foreach ($alumnos as $fila) {
                    $enlaceEdt="editar.php?id=".$fila["id"];
                    $enlaceBrr="borrar.php?id=".$fila["id"];
                  ?>
                  <tr>
                    <td><?php echo escapar($fila["id"]); ?></td>
                    <td><?php echo escapar($fila["nombre"]); ?></td>
                    <td><?php echo escapar($fila["apellido"]); ?></td>
                    <td><?php echo escapar($fila["email"]); ?></td>
                    <td><?php echo escapar($fila["edad"]); ?></td>
                    <td><a  href=<?= $enlaceEdt ?>  class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Editar alumno</a></td>
                    <td><a href=<?= $enlaceBrr ?>  class="btn btn-primary btn-sm">Borrar alumno</a></td>
                  </tr>
                  <?php
                }
              }
              ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
    
<?php include "templates/footer.php"; ?>