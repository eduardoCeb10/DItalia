<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Agrega aquí tu CSS o linkea tu archivo de estilos */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #faf4f0;
            color: #410825;
            font-size: 14px;
        }
        .form-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dce5e4;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus {
            border-color: #ff4558;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 30px;
            background-color: #ff4558;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #eeccf6;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registro</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn">Registrar</button>
        </form>
    </div>
</body>
</html>
