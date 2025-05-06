<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
</head>
<body>
    <h1>Registrar nuevo cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>DNI:</label>
        <input type="text" name="dni" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion"><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>