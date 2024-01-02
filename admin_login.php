<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>Admin Login</h3>
		   <div class="col-md-6 contact-top">
          <form action="" method="post" id="sendemail">
           
                                         
             <div class="con-text">
				  <span>User Name</span>
                <input id="name" type="text" class="text"  name="uname" required />
				</div>
              
               <div class="con-text">
				  <span>Password</span>
                <input type="password" class="text" name="upass"  required />
				</div>
              
                <input type="submit" name="submit" class="send" value="Submit" />

                <div class="clr"></div>
          </form>
		  </div>
      
      <div class="clr"></div>
    </div>
  </div>
<?php
if(isset($_POST['submit']))
{
$aname=$_POST['uname'];
$apass=$_POST['upass'];
$q=mysql_query("select * from admin where aname='$aname' and apass='$apass'");
$c=mysql_num_rows($q);
if($c>0)
{
while($r=mysql_fetch_array($q))
{
$_SESSION['aid']=$aid=$r['aid'];
echo "<script type='text/javascript'>alert('Logged in successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=supplier_register.php"/>';
}
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}
}
?>
<?php
include("footer.php");
?>
