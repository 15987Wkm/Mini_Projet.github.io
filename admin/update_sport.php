<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Num</label>
            <input type="text" name="num" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_num = $_POST['num'];

        $sql = "SELECT * FROM studentsport WHERE num = {$stu_num}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="upsport.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="num"  value="<?php echo $row['num']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
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