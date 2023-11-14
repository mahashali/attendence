<?php include'header.php';?>
<?php include'conn.php';?>


<div class="container">
	<div class="body-header">
		<div class="d-grid gap-2 d-md-flex ">
  <a href="index.php" class="btn btn-primary me-md-2" type="button">Attendence</a>
  <a  href="view.php" class="btn btn-primary btn-end" type="button">View</a>
</div>
	</div>
</div>

    
 	<table class="table table-bordered mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
     <th scope>Name</th>
      <th scope>Roll Name</th>
      <th scope="col">Attandence status</th>
       <th scope="col">Date</th>
      
     
    </tr>
  </thead>
  <tbody>
  	 <?php $sql=" select * from attendance_records"; $result=mysqli_query($conn,$sql); $sn=1;

  	 ?>
  	 <?php while($row = mysqli_fetch_assoc($result)){?>
       <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['student_name'];?></td>
       <td><?php echo $row['roll_number'];?></td>  
      <td><?php echo $row['attendance_status'];?></td>    
      <td><?php echo $row['date'];?></td>    
    </tr>
  <?php

   }?>
  </tbody>
</table>

