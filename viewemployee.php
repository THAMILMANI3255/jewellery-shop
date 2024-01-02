<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>View Employee</h3>
		   <div class="col-md-12 contact-top">
		   <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
		   <tr><td>Name</td><td>Designation</td><td>Department</td><td>Phone</td><td>Email</td><td>Salary</td><td>Salary Date</td></tr>
		   <?php
		   $q=mysql_query("select * from  employee");
		    while($m=mysql_fetch_array($q))
			   {
			   $employee_name=$m['employee_name'];
			   $employee_desig=$m['employee_desig'];
			   $dept=$m['dept'];
			   $phone=$m['phone'];
			   $email=$m['email'];
			   $salary=$m['salary'];
			   $sdate=$m['sdate'];
		   			   echo "<tr><td>$employee_name</td><td>$employee_desig</td><td>$dept</td><td>$phone</td><td>$email</td><td>$salary</td><td>$sdate</td></tr>";
			   }
		   ?>

		   </table>
          
        </div>
      
      <div class="clr"></div><div class="clr"></div>
    </div>
  </div>

<?php
include("footer.php");
?>
