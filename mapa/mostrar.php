<?php 
    include "./head.php"; 
    include "./conexion.php";
    
    $conexion = conexion();
    $continente = "";
    if(isset($_GET['continente'])){
        $continente = $_GET['continente'];
        $sql = "SELECT * FROM paises Where continente ='$continente'";
    } else {
        $sql = "SELECT * FROM paises";
    }
    
    $respuesta = mysqli_query($conexion,$sql);
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="cuerpoCard">
                    <div class="card-body">
                        <table id="table" class="table table-striped" style="width:100%" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre Del Pais</th>
                                    <th>Continente</th>
                                    <th>Bandera</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($ver= mysqli_fetch_array($respuesta)):?>
                                <tr>
                                    <td><?php echo $ver['id'];?></td>
                                    <td><?php echo $ver['nombre'];?></td>
                                    <td><?php echo $ver['continente'];?></td>
                                    <td><img src="<?php echo $ver['bandera'];?>" width="100px"></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <a href="./index.php"><button class="btn btn-primary">Regresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include "./footer.php"; ?>