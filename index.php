<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <?php include 'statics/data/mysql.php';?>
    <link href="https://fonts.googleapis.com/css?family=Eczar|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="statics/css/header.css">
    <link rel="stylesheet" href="statics/css/main.css">
    <script type="text/javascript" src="statics/js/funciones.js"></script>
    <script type="text/javascript">
        productos = new Array();

        <?php foreach ($productos as $key => $value) {  ?>

            productos.push(<?php echo '{';foreach ($value as $k => $v){echo $k . ':"' . str_replace("\n","<br>",$v) . '"';if($k != 'imagen'){echo ',';}}echo '}'; ?>);

        <?php }?>
    </script>

    <title>&ltPet-ESCOM/&gt</title>
</head>

<body>

    <header id="petEscom">
        <a class="inicio" href="index.php">
            <p id="titulo">
                &ltPet-ESCOM/&gt
            </p>
            <hr id="lineTitulo">
        </a>
    </header>

    <div class="superior">
        <div class="centrar">
            <a href="https://www.ipn.mx/"><img class="logo pegadoIzq" src="statics/img/logo_ipn.png"></a>
            <a href="http://www.escom.ipn.mx/"><img class="logo pegadoDer" src="statics/img/logo_escom.png"></a>
        </div>

        <h1 id="curso">Tecnologías para la web -2CV9-</h1>

        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="login.html">Mi Cuenta</a></li>
            </ul>
        </nav>
    </div>

    <hr class="separadorG">

    <div class="contenedorN relativo">
        <main id="principal">
            <section class="seccion">

                <script type="text/javascript">
                    a = [productos[2],productos[3],productos[4],productos[5]];
                    b = [productos[2+4],productos[3+4],productos[4+4],productos[5+4]];
                    muestrario(a);
                    articuloMediano(productos[10]);
                    muestrario(b);
                    articuloMediano(productos[11]);
                </script>

            </section>
        </main>

        <aside id="secundario">
            <section class="seccionA">

                <script type="text/JavaScript">
                    promocional(productos[0]);
                    imgPromocional(productos[12]);
                    promocional(productos[1]);
                    imgPromocional(productos[13]);
                </script>
            </section>
        </aside>
    </div>

    <hr class="separadorG">

    <footer id="pieDePag">
        <p id="tituloPie" class="centrar">
            &ltPet-ESCOM/&gt
        </p>
        <p>
            EQUIPO 6<br>
            Integrantes:<br>
            -Brando Sánchez<br>
            -Galindo Rodríguez<br>
            -Edgar Cabañas<br>
            -Alejandro Valdivia<br>
            Correo: pet_escom@gmail.com
        </p>
    </footer>

</body>

</html>
