<?php  
include "navbar.php" ;
include "DB.php" ;

if(isset($_GET["id"])){
    $id = $_GET["id"] ;
    $query = "DELETE FROM  teammanagement
             WHERE id = $id" ;
    $result = mysqli_query($connect, $query) ;
    header("Location:index.php") ;
}