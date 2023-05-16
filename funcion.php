<?php
    if($_POST){
        $nombre = $_POST['txtNombre']; 
        session_start(); 
        $_SESSION['NombreGlobal'] = $nombre; 
        Header("Location: otra.php"); 
    }
?>