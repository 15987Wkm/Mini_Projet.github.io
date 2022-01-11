<?php include 'header.php'; 
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" required/>
        </div>
		
		
		
		
		<div class="form-group">
		    <label for="ssexe">Sexe:</label><br>
            <input type=radio name=ssexe value=masculin>masculin </td>
			<input type=radio name=ssexe value=feminin>feminin  </td>
			 
		    
			
        </div>
		 <div class="form-group">
		     <label for="sstatut">Statut:</label><br>
             <input type=radio name=sstatut value=marie>marie 
			 <input type=radio name=sstatut value=celibataire>celibataire
			 <input type=radio name=sstatut value=veuf>veuf
			 <input type=radio name=sstatut value=divorce>divorce
		    		
        </div>
			
        </div>
		 
		 <div class="form-group">
		 <input type=checkbox name=permis1 checked>Permis A
		 <input type=checkbox name=permis2 checked>Permis B
		 <input type=checkbox name=permis3 checked>Permis C
		  </div>
		 
        <div class="form-group">
            <label>Class</label>
            <select name="class" required>
                <option value="" selected disabled>Select Class</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> ></option>

              <?php } ?>
            </select>
        </div>


        <div class="form-group">
            <label>Nationalite</label>
            <select name="nationalite" required>
                <option value="" selected disabled>Select Nationalite</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentnationalite";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nom']; ?> ></option>

              <?php } ?>
            </select>
        </div>




        <div class="form-group">
            <label>Sport</label>
            <select name="sport" required>
                <option value="" selected disabled>Select Sport</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentsport";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['num']; ?>"><?php echo $row['name']; ?> ></option>

              <?php } ?>
            </select>
        </div>



        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div> 

        
        <div class="form-group row">
            <label>Photo</label>
            <input type="file" name="img" class="form-control-file/>
        </div> 

        <div class="form-group row">
            <label></label>
            <input type="submit" name="btnAjout" class="btn btn-primary"/>
        </div> 


        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
