<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="contact">
    <div class="container">
           <h3>Add Employee Salary</h3>
		   <div class="col-md-6 contact-top">
				<form  method="post" action="">
							
							
							<div class="con-text">
				  <span>Employee Name</span>
							<input type="text" class="text" placeholder="" name="employee_name" >
						     </div>

							<div class="con-text">
				  <span>Employee Designation</span>
							<input type="text" class="text" placeholder="" name="employee_desig" >
						     </div>
							 
							 <div class="con-text">
				  <span>Employee Department</span>
							<input type="text" class="text" placeholder="" name="dept" >
						     </div>


							 <div class="con-text">
				  <span>Employee Phone</span>
							<input type="text" class="text" placeholder="" name="phone" >
						     </div>


							 <div class="con-text">
				  <span>Employee Email</span>
							<input type="text" class="text" placeholder="" name="email" >
						     </div>

							 
							<div class="con-text">
				  <span>Salary</span>
								<input type="text" class="text" placeholder="Salary" name="salary">
								</div>

								<div class="con-text">
				  <span>Salary Date</span>
								<input type="text" class="text" placeholder="" name="sdate" value="<?php echo date("Y-m-d"); ?>">
							</div>
							
							<input type="submit" name="submit" class="send" value="Submit" />
						</form>
						 </div>
      
      <div class="clr"></div><div class="clr"></div>
    </div>
  </div>
<?php
if(isset($_POST['submit']))
{
$employee_name=$_POST['employee_name'];
$employee_desig=$_POST['employee_desig'];
$salary=$_POST['salary'];

$sdate=$_POST['sdate'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$q=mysql_query("select * from employee where  employee_desig='$employee_desig' and employee_name='$employee_name' and  salary='$salary' and sdate='$sdate'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Salary already added');</script>";
}
else
{
mysql_query("insert into employee(employee_desig,employee_name,salary,sdate,dept,phone,email)values('$employee_desig','$employee_name','$salary','$sdate','$dept','$phone','$email')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Salary added successfully');</script>";
}

}
?>
<?php
include"footer.php";
?>
