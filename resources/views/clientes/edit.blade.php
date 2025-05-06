<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}" required><br><br>

        <label>DNI:</label>
        <input type="text" name="dni" value="{{ $cliente->dni }}" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}"><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $cliente->email }}"><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" value="{{ $cliente->direccion }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>