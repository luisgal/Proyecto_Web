<?php
    //conexion a la base de datos
    $link = mysqli_connect("127.0.0.1:3306", "root", "Dulc3repdzl$");

    //verificar que esxista conexion
    if($link === false){
        die("ERROR: Could not connect. "
                    . mysqli_connect_error());
    }

    //cambiar a la base de datos que manejaremos
    mysqli_select_db($link, "mydb")
    or die("No se puede seleccionar la base de datos:" . mysql_error ());


    //obtener total de productos
    function obtenerNumProductos(){

        //conexion a la base de datos
        $link = $GLOBALS['link'];

        //query para obtener el total de productos que se tiene
        $row = 0;
        if ($result = mysqli_query($link, "select count(idProducto) as id from producto")) {
            $res = mysqli_fetch_assoc($result);
            $row = $res['id'];
            mysqli_free_result($result);
        }

        //devolver el total de productos con los que se cuenta
        return $row;
    }


    //obtener la informacion de un solo producto
    function imprimirProductos($idProducto){
        //conexion a la base
        $link = $GLOBALS['link'];

        //query para obtener todos los datos de un producto
        $sql = "SELECT * FROM producto where idProducto = " . $idProducto;
        if($res = mysqli_query($link, $sql)){
            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_assoc($res);
            } else{
                echo "No Matching records are found.";
            }
            mysqli_free_result($res);
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        //devuelve en un array clave valor la informacion del producto
        return $row;
    }


    //obtener la informacion de todos los productos
    function obtenerProductos(){

        //se pide la informacion de cada producto
        $productos = array();
        for($idProducto = 1; $idProducto <= obtenerNumProductos(); $idProducto++){
            array_push($productos, array_map("utf8_encode", imprimirProductos($idProducto)));
        }

        //devuelve un array de arrays, cada sub-array contiene la informacion de un productos y este es clave valor donde la clave es el nombre de la columna de donde se obtuvo la informacion
        return $productos;
    }

    $productos = obtenerProductos();
    //print_r($productos);
    
?>
