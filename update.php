<?php
    include "navbar.php" ;
    include "DB.php" ;

    if(isset($_GET["id"])){
      $id = $_GET["id"] ;
      $query = "SELECT * FROM teammanagement WHERE id = $id" ;
      // $data = mysqli_query($connect, $query) ; 
      $result = mysqli_fetch_assoc($data) ;
    }
        if(isset($_POST["submit"])){
            echo $_GET["id"] ;
          // die() ;
          $firstName = $_POST["firstName"] ;
          $lastName = $_POST["lastName"] ;
          $departement = $_POST["Departement"] ;
          $salary = $_POST["salary"] ;
          $job = $_POST["job"];
          $sql = "UPDATE teammanagement 
          SET First_Name = '$firstName' ,
          Last_Name = '$lastName' ,
          Birth_Date = '$birthDate' ,
          Departement = '$departement' ,
          Salary = '$salary' ,
          Task = '$job'  
          WHERE id = '$id' " ;

          $result = mysqli_query($connect, $sql) ;

          // header("Location:index.php") ;
        }  
 ?>
<div class="myForm ">
<div class="container">
<form class="row g-3" action="form.php" method="POST">
  <div class="col-md-6">
    <label for="" class="form-label">First Name</label>
    <input type="text" class="form-control" value="<?php echo $result["First_Name"] ?>" name="firstName">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" class="form-control" value="<?php echo $result["Last_Name"]  ?>" name="lastName">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Departement</label>
    <input type="text" class="form-control" id="inputAddress" value="<?php echo $result["Departement"] ?>"   name="Departement">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Salary</label>
    <input type="text" class="form-control" id="" value="<?php echo $result["Salary"] ?>"  name="salary">
  </div>

  <div id="job" class="col-md-6">
    <label for="inputCity" class="form-label">Job</label>
    <input type="text" class="form-control" id="" value="<?php echo $result["Task"] ?>"  name="job">
  </div>
  <div class="col-md-6 pt-4">
    <label for="inputState" class="form-label">Date of Birth</label>
    <input type="date" name="birthDate" id="date" value="<?php echo $result["Birth_Date"] ?>"  name="birthDate">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"  name="submit">Sign in</button>
  </div>
</form>
</div>
</div>
<?php 