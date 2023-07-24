<?php
if(!empty($_POST['usuario'])&& !empty($_POST['password'])){
    $usr=$_POST['usuario'];
    $pwd=$_POST['password'];   
    if($usr=="jbriones" && $pwd=="123")
    {
        $_SESSION["usuario"] = $usuario;
        session_start();
        header("Location: index1.php");
    }else{
    header("Location: index.html");
}
}
else{
    header("Location: index.html");
}

?>


