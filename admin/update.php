<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php
          $sql1 = "SELECT * FROM studentclass";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="sclass">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['sclass'] == $row1['cid']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>


        <div class="form-group">
        <label>Nationalite</label>
        <?php
          $sql1 = "SELECT * FROM studentnationalite";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="nationalite">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['nationalite'] == $row1['id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['id']}'>{$row1['nom']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>





        <div class="form-group">
        <label>Sport</label>
        <?php
          $sql1 = "SELECT * FROM studentsport";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="sport">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['sport'] == $row1['num']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['num']}'>{$row1['name']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>


        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
        </div>
		  <div class="form-group">
            <label>Sexe</label>
            <input type="text" name="ssexe" value="<?php echo $row['ssexe']; ?>" />
        </div>
		
		  <div class="form-group">
            <label>Statut</label>
            <input type="text" name="sstatut" value="<?php echo $row['sstatut']; ?>" />
        </div>
		
		
		
		
		
		
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>