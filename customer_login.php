<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>Customer Login</h3>
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

$uname=$_POST['uname'];
$upass=$_POST['upass'];

$q=mysql_query("select * from  customer_register where uname='$uname' and upass='$upass'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
while($r=mysql_fetch_array($q))
{
$_SESSION['uid']=$uid=$r['customer_id'];
$_SESSION['uname']=$uname=$r['uname'];
echo "<script type='text/javascript'>alert('Customer logged in');</script>";
echo '<meta http-equiv="refresh" content="0;url=stock.php"/>';

}
}
else
{
echo "<script type='text/javascript'>alert('Customer login mismatch');</script>";

}

}
?>
<?php
include("footer.php");
?>
