<?php
    include "navbar.php" ;
    include_once'DB.php';
?>
    <?php 
    global $myRow ;
        $sql = "SELECT * FROM teammanagement" ;
        $result = mysqli_query($connect , $sql) ;
        $checking = mysqli_num_rows($result) ;
        /////
        if(isset($_POST["submit1"])){
            echo "hello" ;
        }
     ?>
    <aside>
       <div id="tableTitle">
       <h2 >   <img id="staffPic" src="images/staff2.png" alt="" srcset=""> Employees</h2>
       </div>
    <table class="table table-dark ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Departement</th>
      <th scope="col">salary</th>
      <th scope="col">Job</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Pic</th>
      <th scope="col">U/D</th>
    </tr>
  </thead> 
  <?php while($myRow = mysqli_fetch_assoc($result)){  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $myRow["id"] ?></th>
      <td><?php echo $myRow["First_Name"] ?></td>
      <td><?php echo $myRow["Last_Name"] ?></td>
      <td><?php echo $myRow["Departement"] ?></td>
      <td><?php echo $myRow["Salary"] ?></td>
      <td><?php echo $myRow["Task"] ?></td>
      <td><?php echo $myRow["Birth_Date"] ?></td>
      <td><?php echo "hi" ?></td>
      <td>
          <a href="update.php?id=<?php echo $myRow["id"] ?>"  class='btn btn-default bg-success'>Update</a>
          <a href="index.php?id=<?php echo $myRow["id"] ?>"  class='btn btn-default bg-danger'>Delete</a>
          <!-- <button type="submit" name="submit1" class="btn btn-default bg-danger">Delete</button> -->
    </td>
    </tr>
  </tbody>
  <?php }  ?>
</table>
    </aside>
<?php include "footer.php"?>