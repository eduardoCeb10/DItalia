<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenidos</title>
</head>
<body class="login-body">
    <div class="login-page-container">
        <!-- Contenedor para el formulario -->
        <div class="form-container">
            <div class="login-header">Iniciar Sesión</div>
            <div id="login-form" class="form-content">
                <form>
                    <input type="email" name="correo" placeholder="Correo Electrónico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="stay_connected">
                            <span class="checkmark"></span>
                            &nbsp;Permanecer conectado
                        </label>
                    </div>
                    <button type="submit" class="botontn1">Iniciar Sesión</button>
                </form>
                <div class="footer">
                    ¿No tienes cuenta? <a href="#" onclick="toggleForms()">Regístrate</a>
                </div>
            </div>
            <div id="register-form" class="form-content" style="display: none;">
                <form>
                    <input type="text" name="correo" placeholder="Correo Electrónico" required>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button type="submit" class="botontn1">Registrarse</button>
                </form>
                <div class="footer">
                    ¿Ya tienes cuenta? <a href="index.php?pagina=login" onclick="toggleForms()">Inicia sesión</a>
                </div>
            </div>
        </div>
        <!-- Contenedor para la imagen -->
        <div class="image-container">
        <a href="index.php?pagina=dashboard">
            <img src="<?php echo $ruta . "/" ?>images/logo-sni.png" alt="Login Image">
        </a>
        </div>
    </div>

    <script>
        function toggleForms() {
            var loginForm = document.getElementById('login-form');
            var registerForm = document.getElementById('register-form');
            var loginHeader = document.querySelector('.login-header'); // Selecciona el encabezado del formulario

            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
                loginHeader.textContent = 'Iniciar Sesión'; // Cambia el texto del encabezado a Inicio de Sesión
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                loginHeader.textContent = 'Registrarse'; // Cambia el texto del encabezado a Registrarse
            }
        }
    </script>
</body>
</html>
