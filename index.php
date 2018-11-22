<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Muli:700|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/aside.css">
    <script type="text/javascript" src="funciones.js"></script>

    <title>&ltPet-ESCOM/&gt</title>
</head>

<body>
    <?php include 'mysql.php';?>
    <header id="petEscom">
        <div class="centrar">
            <a href="https://www.ipn.mx/"><img class="logo pegadoIzq" src="styles/img/logo_ipn.png"></a>
            <a href="http://www.escom.ipn.mx/"><img class="logo pegadoDer" src="styles/img/logo_escom.png"></a>
        </div>

        <a class="inicio" href="http://localhost/TecnoWeb/Proyecto_Web/">
            <p id="titulo">
                &ltPet-ESCOM/&gt
            </p>
            <hr id="lineTitulo">
        </a>
    </header>

    <div class="superior">
        <h1 id="curso">Tecnologías para la web -2CV9-</h1>
        <nav class="menu">
            <ul>
                <li><a href="http://localhost/TecnoWeb/Proyecto_Web/">Inicio</a></li>
                <li><a href="about.html">Sobre nosotros</a></li>
                <li><a href="products.html">Productos</a></li>
                <li><a href="help.html">Ayuda</a></li>
                <li><a href="login.html">Entrar</a></li>
            </ul>
        </nav>
    </div>

    <hr id="separadorG">

    <main id="principal">
        <section class="seccion">

            <script type="text/javascript">
                muestrario();
                articuloMediano();
                muestrario();
                articuloMediano();
                articuloMediano();
            </script>

        </section>
    </main>

    <aside id="secundario">
        <section class="seccionA">

            <script type="text/javascript">
                var data0 = [<?php echo '"'.implode('","', $row[0]).'"' ?>];
                var data1 = [<?php echo '"'.implode('","', $row[1]).'"' ?>];
                var data2 = [<?php echo '"'.implode('","', $row[2]).'"' ?>];

                promocional(data0);
                imgPromocional();
                promocional(data1);
                imgPromocional();
                promocional(data2);
            </script>

        </section>
    </aside>

</body>

</html>
