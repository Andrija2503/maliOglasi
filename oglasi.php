<?php require_once "function.php";

if(isset($_SESSION['id'])){
    include "oglasi.view.php";
}else{
    header("Location: index.php");
}

?>