<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post"></form>
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="name" required>
  
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>
  
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required>
  
    <label for="existencias">Existencias:</label>
    <input type="number" id="existencias" name="existencias" required>
  
    <label for="proveedor">Proveedor:</label>
    <input type="text" id="proveedor" name="proveedor" required>
  
    <button type="submit">Guardar</button>
</body>
</html>