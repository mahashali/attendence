<?php include'header.php';?>
<?php include'conn.php';?>
<?php 
if(isset($_POST['submit'])) 
{
	foreach($_POST['attendance_status'] as $id=>$attendance_status) 
	{
$student_name =$_POST['student_name'][$id];
$roll_number =$_POST['roll_number'][$id];
$date=date("y-m-d H:i:s");
mysqli_query($conn,"insert into attendance_records(student_name,roll_number,attendance_status,date)values('$student_name','$roll_number','$attendance_status','$date')");

	
	}
}



?>

<div class="container">
	<div class="body-header">
		<div class="d-grid gap-2 d-md-flex ">
  <a href="add.php" class="btn btn-primary me-md-2" type="button">Add</a>
  <a  href="vieallattn.php" class="btn btn-primary btn-end" type="button">View Attendence</a>
</div>

	</div>
</div>

    
 <form action="index.php" method="post">
 	<table class="table table-bordered mt-4">
    <input type="submit" name="submit" value="save" class="btn btn-primary mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
       <th scope="col">Attendance students</th>
     
    </tr>
  </thead>
  <tbody>
  	 <?php $sql=" select * from attendance"; $result=mysqli_query($conn,$sql); $sn=1;
       $counter=0;
  	 ?>
  	 <?php while($row = mysqli_fetch_assoc($result)){?>
       <tr>
      <td><?php echo $sn++;?></td>

      <td><?php echo $row['student_name'];?>

      <input type="hidden" value="<?php echo $row['student_name'];?>" name="student_name[]">

    </td>
      <td><?php echo $row['roll_number'];?>
      	   <input type="hidden" value="<?php echo $row['roll_number'];?>" name="roll_number[]">

      </td>
      <td>
      	<input  type="radio" name="attendance_status[<?php echo $counter; ?>]" value="perecent"><span class="text-success rounded fs-5 p-2">perecent</span>
      	<input type="radio"name="attendance_status[<?php echo $counter; ?>]" value="absent">absent
        <input type="radio"name="attendance_status[<?php echo $counter; ?>]" value="absent">Late
        <input type="radio"name="attendance_status[<?php echo $counter; ?>]" value="absent">haftDay


      </td>
      
    </tr>
  <?php
 $counter++;
   }?>
  </tbody>
</table>

 </form>