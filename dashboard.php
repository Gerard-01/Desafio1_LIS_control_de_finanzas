<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Finanzas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #60A5FA;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: #333;
            max-width: 400px;
            width: 100%;
        }

        .list-group-item a {
            color: #1e3c72;
            text-decoration: none;
        }

        .list-group-item:hover {
            background-color: #f0f0f0;
        }

        .btn-danger {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h2 class="text-center" style="color: #1e3c72; margin-bottom: 1rem;">Control de Finanzas</h2>
        <ul class="list-group mb-3">
            <a href="paginas/registrar_entrada.php" class="list-group-item list-group-item-action">Registrar Entrada</a>
            <a href="paginas/registrar_salida.php" class="list-group-item list-group-item-action">Registrar Salida</a>
            <a href="paginas/ver_entradas.php" class="list-group-item list-group-item-action">Ver Entradas</a>
            <a href="paginas/ver_salidas.php" class="list-group-item list-group-item-action">Ver Salidas</a>
            <a href="paginas/mostrar_balance.php" class="list-group-item list-group-item-action">Mostrar Balance</a>
        </ul>
        
        <form method="POST" action="logout.php">
            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>