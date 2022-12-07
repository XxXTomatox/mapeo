<?php include"./head.php"; ?>
<br>
<div class="container">
    <div class="col">
        <div class="row">
        <div class="card mt-4" id="cuerpoCard">
                    <div class="body-card">
                                    <form action="./backend/agregar.php" method="post">
                            <label for="nombre">pais</label>
                            <input type="text" name="nombre" id="nombre">
                            <br>
                            <label for="continente">Continente</label>
                                            <select name="continente" id="continente" class="form-select">
                                                <option>escoje el continente</option>
                                                <option value="America">America</option>
                                                <option value="Europa">Europa</option>
                                                <option value="Asia">Asia</option>
                                                <option value="Oceania">Oceania</option>
                                                <option value="Africa">Africa</option>
                                            </select>
                            <br>
                            <div class="mb-3">
                            <label for="bandera" class="form-label">bandera</label>
                            <input class="form-control" type="text" name="bandera" id="bandera">
                            </div>
                            <br>
                            <button class="btn btn-primary">Agregar</button>
                            <a href="./index.php"><button class="btn btn-primary">Regresar</button></a>
                        </form>
                    </div>
        </div>
           
        </div>
    </div>
</div>

<?php include"./footer.php" ?>