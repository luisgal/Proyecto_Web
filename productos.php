<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Eczar|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="statics/css/header.css">
    <link rel="stylesheet" href="statics/css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="statics/js/funciones.js"></script>

    <title>&ltPet-ESCOM/&gt</title>
</head>

<body>

    <?php include 'statics/data/mysql.php';?>

    <header id="petEscom">
        <a class="inicio" href="index.php">
            <p id="titulo">&ltPet-ESCOM/&gt</p>
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
                    muestrario();
                    muestrario();
                    muestrario();
                    muestrario();
                </script>

            </section>
        </main>

        <aside id="secundario">
            <section class="busqueda">
                <article class="box">
                    <div class="container-4">
                        <input type="search" id="search" placeholder="Search..." />
                        <button class="icon"><i class="fa fa-search"></i></button>
                    </div>
                </article>
            </section>

            <section class="filtrar">
                <p class="filtros">
                    <h2>Filtrar por:</h2>
                </p>
                <article class="centrar spaceR">
                    <h4>Calificación</h4>
                    <label class="container">★★★★★
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">★★★★
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">★★★
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">★★ o menos
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </article>
                <article class="centrar spaceR">
                    <h4>Precio</h4>
                    <label class="container">$1500 o más
                        <input type="radio" checked="checked" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">$1000-$1499
                        <input type="radio" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">$500-$999
                        <input type="radio" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Menos de $500
                        <input type="radio" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                </article>
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
