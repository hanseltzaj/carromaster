<?php include("header.php")?>
<div class="static">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                </div>
                <div class="col-md-4 col-12 text-center"> 
                    <h2 class="my-md-3 site-title text-white"><img src="img/portadabelhsa.png" width="200px" alt=""></h2>
                </div>
            </div>
        </div>
    </div>
<?php

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM producto WHERE idProducto = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['nProducto'];
            $categoria = $row['nCategoria'];
            $description = $row['dProducto'];
            $precio = $row['pProducto'];
        }
    }
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $categoria = $_POST['categoria'];
        $description = $_POST['description'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $query = "UPDATE producto set nProducto = '$title', dProducto = '$description', pProducto='$precio', imagen='$imagen', nCategoria='$categoria' WHERE idProducto=$id";
        mysqli_query($conn, $query);
        
        echo'<script type="text/javascript">window.location.href="adminindex.php";</script>';
    }
?>
<?php include("header.php"); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                <center><h2>MODIFICACIÓN DE PRODUCTOS</h2></center>
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        Nombre de producto:<input type="text" REQUIRED name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                        Categoría:<select id="agileinfo-nav_search" name="categoria" value="<?php echo $categoria; ?>" class="border" REQUIRED>
								<?php
                                	$query = "SELECT * FROM categoria";
                                	$resultTask = mysqli_query($conn, $query);
                                	while($row = mysqli_fetch_array($resultTask)){ ?>
										<option value="<?php echo $row['nCategoria']?>"><?php echo $row['nCategoria']?></option>
                            	<?php } ?>
						    </select>
                        </div>
                        <div class="form-group">
                        Descripción de producto:
                            <textarea name="description" REQUIRED rows="2" class="form-control" placeholder="Descripción"><?php echo $description; ?></textarea>
                        </div>
                        <div class="form-group">
                        Precio de producto:
                            <input type="text" name="precio" REQUIRED value="<?php echo $precio; ?>" class="form-control" placeholder="Precio">
                        </div>
                        <input type="file" REQUIRED name="imagen"/>
                        <button class="btn btn-success" name="update">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>