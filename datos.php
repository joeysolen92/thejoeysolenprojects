
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="estilos.css">
    <title>Ejemplo de recibir</title>
</head>
    <body>
        <?php
           
            echo"<font face='sans-serif' size='5'><FONT SIZE = +1 COLOR = 'BLACK'>";
            echo "<h1>PRUEBA 2 </h2><br>";
            echo "<h2>PRUEBA DE INGRESO DE DATOS</h2><br>";
                $nombre=$_GET["nombre"];
                $apellido=$_GET["apellido"];
            echo "datos recibidos : <br> Nombre: " . $nombre . "<br>Apellido :" . $apellido ;
            echo "<br><br>";
        ?> 
        <?php
            for ($con=0;$con<11;$con++)
                {
                    echo"<font face='sans-serif' size='5'><FONT SIZE = +1 COLOR = 'BLACK'>";
                    echo $_GET["num1"], " * ", $con, " = ", ($_GET["num1"]*$con), "<br>";
                    echo "</div>";
                }
        ?>
    </body> 
</html>
        <?php
        ?>