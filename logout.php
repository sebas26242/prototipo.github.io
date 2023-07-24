<?php
# Si no entiendes esto, primero mira a login.php

# Iniciar sesión (sí, aunque la vamos a destruir, primero se debe iniciar)
$_SESSION["usuario"] = $usuario;
session_start();
# Después, destruirla
# Eso va a eliminar todo lo que haya en $_SESSION
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: index.html");