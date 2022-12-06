<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nuevo correo</title>
</head>
<body>
    <p>Este mensaje fue enviado por: {{$emailLog->usuario}} de SupplierMaster</p> 
    <p>Le escribimos cordialmente hacia el correo: {{$emailLog->correo}}</p>
    <p>Lo contactamos por el siguiente asunto: {{$emailLog->asunto}}</p>
    <p>Con el siguiente mensaje:{{$emailLog->mensaje}}</p>
    <p>Atentamente, {{$emailLog->usuario}} de SupplierMaster</p> 
</body>
</html>