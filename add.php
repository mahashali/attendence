<?php include'header.php';?>
<?php include'conn.php';?>

<?php
if (isset($_POST['submit'])) {
	mysqli_query($conn,"insert into attendance(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");






}





?>



<div class="container bg-light mt-4 p-3">
		<h2  class="text-center">
		employeen /studens
		</h2>
	</div>

<div class="container mt-4 bg-light">
	<div class="body-header p-3">
		<div>
	<div class="d-grid gap-2 d-md-flex ">
  <a href="add.php" class="btn btn-primary me-md-2" type="button">Add</a>
  <a  href="index.php" class="btn btn-primary btn-end" type="button">Back</a>
</div>
		
	</div>
	
</div>

  <form action="add.php" method="post">
  	<div  class="form-control">
  		<label>Name</label>
  	<input class="form-control" type="text" name="name" id="name" required>	
  	</div>
  	<div  class="form-control">
  		<label>Roll</label>
  	<input class="form-control"type="number" name="roll"  id="roll"required>	
  	</div>
  	<div  class="form-control">
  	
  	<input class="btn btn-primary"type="submit" name="submit" value="submit" id="submit" required>	
  	</div>
  	

  </form>