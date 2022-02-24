{% extends "Pagina.php" %} {% block content %}

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Red Rose Condition</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">RRC</h1>
                    <h2 class="masthead-subheading mb-0">Red Rose Condition</h2>
                </div>
            </div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="https://i.ibb.co/CvrpxGw/logo.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                        <form method="POST">
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Añadir url de imagen">
</form>

<h2></h2>
<div>
    <form id="upload-file" method="POST" enctype="multipart/form-data">
        <label for="imageUpload" class="upload-label">
            Cargar Imagen
        </label>
        <input type="file" name="file" id="imageUpload" accept=".png, .jpg, .jpeg">
    </form>

    <div class="image-section" style="display:none;">
        <div class="img-preview">
            <div id="imagePreview">
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-dark" id="btn-predict">Predicción</button>
        </div>
    </div>
    <div id="todolist">
        <?php
                $nombre = $_POST['nombre'];
                $con = "host=rosie.db.elephantsql.com dbname=rlxcjema user=rlxcjema password=lvFbJ_jRwS3R3QZXaoatQLvPvDM8Spt2";
                $conexion = pg_connect($con) or die( "Error al conectar: ".pg_last_error() );
                 #return $conexion;
            #if(isset($_POST['nombre'])){   
            #    $nombre = $_POST['nombre'];
                $query = "INSERT INTO imagen VALUES ('$nombre')";
                $insertar = pg_query( $conexion, $query );
            

        ?>
    </div>
    <div class="loader" style="display:none;"></div>

    <h3 id="result">
        <span> </span>
    </h3>

</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; RRC 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

{% endblock %}