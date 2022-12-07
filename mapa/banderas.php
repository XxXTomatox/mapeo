<?php 
      include "./conexion.php"; 
      include "./head.php"; 
      $conexion = conexion(); 
      $sql = "SELECT * FROM paises"; 
      $respuesta = mysqli_query($conexion, $sql);
?>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      <br>   
        <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col">pais</th>
              <th scope="col">continente</th>
              <th scope="col">bandera</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php while($ver = mysqli_fetch_array($respuesta)):?>
            <tr>
              <th scope="row"><?php echo $ver['nombre']; ?></th>
                <th><?php echo $ver['continente']; ?></th>
                <th><img src="<?php echo $ver['bandera']; ?>" class="img-thumbnail" alt=""></th>
                <th></th>
                <td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>

