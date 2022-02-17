<?php
    include "navbar.php" ;
    include_once'DB.php';
?>
    <?php 
        if($connect){
            echo "connection is done" ;
        }else{
            echo "connection is failed".mysqli_connect_error() ;
        }
        $sql = "SELECT * FROM staffmanagement" ;
        $result = mysqli_query($connect , $sql) ;
        $checking = mysqli_num_rows($result) ;
        
        if($checking > 0) {
            while($staff = mysqli_fetch_assoc($result)){
                echo "<pre>" ;
                    var_dump($staff) ;
                echo "</pre>" ;
            }
        }
    ?>
<?php include "footer.php"?>




