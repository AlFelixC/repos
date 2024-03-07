<!DOCTYPE html>
<html>
<header>
	<h1>Mi gran página web</h1>

    <div class="saludo">
        <?php
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }

            function mostrarSaludo() {
                if(isset($_SESSION['login'])){

                    echo "Hola, " . $_SESSION['nombre'] . ". Bienvenido.";
                    echo "<a href='logout.php'> Cerrar Sesion </a>";
                }
                else {

                    echo "Usuario desconocido. <a href='login.php'>Iniciar sesión</a>";
                }

            }   



            mostrarSaludo();
        ?>
    </div>
</header>
</html>