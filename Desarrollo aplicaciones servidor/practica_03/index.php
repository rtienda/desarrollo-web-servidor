<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Practica_03</h1>
    <p>Ejercicio 1 y 2 productos</p>
    <?php
    $productos = [
            ["Arroz con Pollo al Curry", "2.10",4],
            ["Suchard", "3.20",3],
            ["Monster", "1.10",2],
    ];
    ?>
    <table class="table table-primary table-striped">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>

        <?php
            $cantidadTotal=0;
            $subtotal=0;
            $nombreProducto=array_column($productos,0);
            array_multisort($nombreProducto,SORT_ASC,$productos);
            $totalProductos=0;
            foreach($productos as $producto){
                list($nombre,$precio,$cantidad) = $producto;
                ?><tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $precio?></td>
            <td><?php echo $cantidad ?></td>
            <td><?php echo $cantidad*$precio ?></td>
        </tr><?php
                $totalProductos=$totalProductos+$precio;
                $cantidadTotal=$cantidadTotal+$cantidad;
                $subtotal=$subtotal+($precio*$cantidad);
            }
            
        ?>

    </table>
    <?php
        echo "<p>Hay ".$cantidadTotal." productos y su precio total es $subtotal euros</p><br>";
        echo "<p>Ejercicio 3<p><br>";
        $array3 = [];
        for($i=1;$i<=50;$i++){
            $array3[$i]=$i;
        }
        // array_values($array3);
        foreach($array3 as $i => $valor){
            // echo "$valor, ";
            if($valor%3==0){
                // echo "Este valor sirve, ";
                unset($array3[$valor]);
            }
            
        }
        ?>
        <ul class="list-group">
        <?php
        foreach($array3 as $valor){
            ?><li class="list-group-item"><?php echo $valor ?></li><?php 
        }
    ?>
    </ul>
    <br>

    <!-- Ejercicio4 -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>