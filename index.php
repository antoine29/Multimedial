<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pagina ejemplo</title>
    </head>
    <body style="width:800px; background-color:black">
        <div style="width:800px; height:90px; float:left; background-color:white">
            <h1>UMSA</h1>
        </div>
        <div style="width:200px; height:200px; float:left; background-color:white">
            <a href="./fisica/InicioFisica.html">Fisica</a>
            <br>
            <a href="./quimica/InicioQuimica.html">Quimica</a>
            <br>
            <a href="./quimica/iiq/InicioIIQ.html">IIQ</a>
            <br>
            <a href="./mate/InicioMate.html">Mate</a>
            <br>
        </div>
        <div style="width:600px; float:left; background-color:red">
            Bienvenido FCPN
            <?php
                echo "Hola juanito <br/>";
                echo "Hola ". 'Juanito 2 <br>';
                echo "Hola ". 'Juanito 2 <br>';
                $var1 = 2.2;
                echo 'Hola'.$var1."<br/>";
                echo '<a href="./quimica/iiq/inicioIIQ.html">--IIQ</a><br>';
            ?>

            <h1>Tabla PHP</h1>
            <table border="1px">
                <?php
                    for($i=1; $i<=10;$i++){
                        echo "<tr>";
                        echo "<td>";
                        echo "c".$i;
                        echo "</td>";
                        echo "<td>";
                        echo "c".$i;
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>    
    </body>
</html>
