<?php
    include "navbar.php" ;
    include "DB.php" ;

      $id = $_GET["id"];

      echo "<hr>" ;
        echo $id ;
      echo "<hr>" ;
    // if(isset($_POST["submit"])){
    //     $firstName = $_POST["firstName"] ;
    //     $lastName = $_POST["lastName"] ;
    //     $departement= $_POST["Departement"] ;
    //     $salary = $_POST["salary"] ;
    //     $job = $_POST["job"] ;
    //     $birthDate = $_POST["birthDate"] ;
    //     $id = $_POST["id"] ;

        $sql = "SELECT * FROM teammanagement WHERE id = $id" ;
        $result = mysqli_query($connect , $sql) ;
        $employee = mysqli_fetch_assoc($result) ;
        if($connect){
          echo "connected" ;
        }else{
          echo "connection failed".mysqli_connect_error() ;
        }
    //     echo "<pre>" ;
    //       var_dump($myRow) ;
    //     echo "</pre>" ;

    //     $myQuery = "UPDATE teammanagement SET
    //       First_Name = ,
    //       Last_Name =  ,
    //       Birth_Date =  ,
    //       Departement = ,
    //       Salary = ,
    //       Task = ,
    //     WHERE id = $id " ;
    // }
 ?>
<div class="myForm ">
<div class="container">
<form class="row g-3" action="form.php" method="POST">
  <div class="col-md-6">
    <label for="" class="form-label">First Name</label>
    <input type="text" class="form-control" value="<?php echo $employee["First_Name"] ?>" name="firstName">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" class="form-control" value="<?php echo $employee["Last_Name"]  ?>" name="lastName">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Departement</label>
    <input type="text" class="form-control" id="inputAddress" value="<?php echo $employee["Departement"] ?>"   name="Departement">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Salary</label>
    <input type="text" class="form-control" id="" value="<?php echo $employee["Salary"] ?>"  name="salary">
  </div>

  <div id="job" class="col-md-6">
    <label for="inputCity" class="form-label">Job</label>
    <input type="text" class="form-control" id="" value="<?php echo $employee["Task"] ?>"  name="job">
  </div>
  <div class="col-md-6 pt-4">
    <label for="inputState" class="form-label">Date of Birth</label>
    <input type="date" name="birthDate" id="date" value="<?php echo $employee["Birth_Date"] ?>"  name="birthDate">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"  name="submit">Sign in</button>
  </div>
</form>
</div>
</div>
<?php 