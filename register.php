<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Login</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <form action="insertar.php" class="form-box" method="POST">
    <h1 class="form-title">Formulario Registro</h1>
        <input type="text" name="Nombre" placeholder="Ingrese su Nombre" >
        <input type="text" name="Apellidos" placeholder="Ingrese su Apellido">
        <input type="number" name="Edad" placeholder="Ingrese su Edad">
        <input type="email" name="Correo" placeholder="Ingrese su Correo">
        <input type="date" name="Fecha_nacimiento" placeholder="Ingrese su fecha de Nacimiento">
        <input type="text" name="Region" placeholder="Ingrese su Region">
    <button type="submit">
      Enviar
    </button>
  </form>
</body>

</html>