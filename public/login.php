<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login & Register</title>
</head>
<body>
    <div class= "formlr">
        <div class="form-box">
            <div class="btn-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input">
                <input type="text" class="entrada" placeholder="Usuario" required>
                <input type="text" class="entrada" placeholder="Contraseña" required>
                <input type="checkbox" class="check"><span class="cspan">Recordar contraseña</span>
                <button type="submit" class="submit-btn">Iniciar</button>
            </form>
            <form id="register" class="input">
                <input type="text" class="entrada" placeholder="Correo" required>
                <input type="text" class="entrada" placeholder="Usuario" required>
                <input type="text" class="entrada" placeholder="Contraseña" required>
                <input type="checkbox" class="check"><span class="cspan">Acepto los terminos y condiciones</span>
                <button type="submit" class="submit-btn">Registrarse</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>