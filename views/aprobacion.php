<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Viáticos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4c87af;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        main {
            padding: 2rem;
        }

        form {
            background-color: white;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4c87af;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4c87af;
        }
    </style>
</head>

<body>

    <header>
        <h1>ViaticApp A_A</h1>
    </header>

    <main>

        <!-- Formulario para solicitar viáticos -->

        <form id="aprobarViaticos">
            <h2>Aprobación</h2>
            <label for="solicitudID">ID de la Solicitud:</label>
            <input type="text" id="solicitudID" name="solicitudID" required>

            <label for="estado">Estado de Aprobación:</label>
            <select id="estado" name="estado" required>
                <option value="aprobado">Aprobar</option>
                <option value="denegado">Denegar</option>
            </select>

            <input type="submit" value="Actualizar Estado">
        </form>
    </main>

</body>

</html>