<?php
    $link = mysqli_connect("127.0.0.1:3306", "root", "Dulc3repdzl$");

    if($link === false){
        die("ERROR: Could not connect. "
                    . mysqli_connect_error());
    }

    mysqli_select_db($link, "world")
    or die("No se puede seleccionar la base de datos:" . mysql_error ());

    function obtenerNum(){
        $link = $GLOBALS['link'];
        if ($result = mysqli_query($link, "select count(ID) from city")) {
            $row = mysqli_fetch_row($result);
            $num = rand(1, intval($row[0]));
        }else{
            $num = rand(1, 1000);
        }

        return $num;
    }

    function imprimirCiudades($num){
        $link = $GLOBALS['link'];
        $sql = "SELECT * FROM city where ID=" . $num;
        if($res = mysqli_query($link, $sql)){
            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_array($res, MYSQLI_NUM);
                mysqli_free_result($res);
            } else{
                echo "No Matching records are found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        return $row;
    }

    $row = [array_map("utf8_encode", imprimirCiudades(obtenerNum())), array_map("utf8_encode", imprimirCiudades(obtenerNum())), array_map("utf8_encode", imprimirCiudades(obtenerNum())), array_map("utf8_encode", imprimirCiudades(obtenerNum()))];

    mysqli_close($link);
?>
