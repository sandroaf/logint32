<?php
    session_start();
    if (isset($_POST["fuser"]) && isset($_POST["fpass"])) {
        //validar login
        require_once("user.php");
        if (($_POST["fuser"] == user) && (md5($_POST["fpass"]) == password)) {
            $_SESSION["user"] = $_POST["fuser"];
            header("Location: painel.php");
        } else {
            $_SESSION["msg"] = "<span class='erro'>ERRO! Usuário ou senha incorretos.</span>";
            header("Location: index.php");     
        }
    } else {
        header("Location: index.php");
    }
?>