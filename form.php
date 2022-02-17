<?php include "navbar.php" ?>
<div class="myForm">
<div class="container">
<form class="row g-3" action="form.php" method="POST">
  <div class="col-md-6">
    <label for="" class="form-label">First Name</label>
    <input type="text" class="form-control" id="" name="firstName">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputPassword4"  name="lastName">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Departement</label>
    <input type="text" class="form-control" id="inputAddress"  name="Departement">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Salary</label>
    <input type="text" class="form-control" id=""  name="salary">
  </div>

  <div id="job" class="col-md-6">
    <label for="inputCity" class="form-label">Job</label>
    <input type="text" class="form-control" id="" name="job">
  </div>
  <div class="col-md-6 pt-4">
    <label for="inputState" class="form-label">Date of Birth</label>
    <input type="date" name="birthDate" id="date" name="birthDate">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
  </div>
</form>
</div>
</div>

<?php 

    if(isset($_POST["submit"])){
      $firstName = $_POST["firstName"] ;
      $lastName = $_POST["lastName"] ;
      $dapar = $_POST["Departement"] ;
      $salary = $_POST["salary"] ;
      $job = $_POST["job"] ;
      $birthDate = $_POST["birthDate"] ;
      echo "<hr>" ;
        echo $firstName ;
      echo "<hr>" ;
        echo $lastName ;
      echo "<hr>" ;
        echo $salary ;
      echo "<hr>" ;
        echo $dapar ;
      echo "<hr>" ;
        echo $job ;
      echo "<hr>" ;
        echo $birthDate ;
      echo "<hr>" ;
    }
?>