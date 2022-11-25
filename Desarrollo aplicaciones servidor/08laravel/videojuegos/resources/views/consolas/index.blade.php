<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Consolas</h1>

        <div class= "row">
            <div class="col-9">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Año de salida</th>
                                <th>Generacion</th>
                                <th>Descripcion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($consolas as $consola)
                                <tr>
                                    <td>{{$consola -> nombre}}</td>
                                    <td>{{$consola -> anyo_salida}}</td>
                                    <td>{{$consola -> generacion}}</td>
                                    <td>{{$consola -> descripcion}}</td>
                                  
                                </tr>
                                {{-- Comentario Blade --}}
                            @endforeach
                        </tbody>
                </table>
            </div>
    
        </div>
        </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>