<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>Customer Register</h3>
		   <div class="col-md-6 contact-top">
          <form action="" method="post" id="sendemail">
                          
           
              <div class="con-text">
				  <span>Customer name </span>		
				 <input id="customer_name" type="text" class="text"  name="customer_name" required required pattern="[a-zA-Z]+" oninput="this.value=this.value.replace(/[^a-zA-Z]/g,'');" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"/>				
				</div>

<div class="con-text">
				  <span>Email</span>		
              <input id="name" type="email" class="text"  name="email" required />
				</div>
				                


             <div class="con-text">
				  <span>User Name</span>
                <input id="name" type="text" class="text"  name="uname" required />
				</div>
              
               <div class="con-text">
				  <span>Password</span>
                <input type="password" class="text" name="upass" required />
				</div>
              
                <input type="submit" name="submit" class="send" value="Submit" />

                <div class="clr"></div>
          </form>
		  </div>
      
      <div class="clr"></div><div class="clr"></div>
    </div>
  </div>
<?php
if(isset($_POST['submit']))
{
$customer_name=$_POST['customer_name'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$email=$_POST['email'];


$q=mysql_query("select * from  customer_register where uname='$uname' and upass='$upass'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Customer account already exists');</script>";
}
else
{
mysql_query("insert into customer_register(customer_name,email,uname,upass)values('$customer_name','$email','$uname','$upass')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Customer account registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=customer_login.php">';
}

}
?>
<?php
include("footer.php");
?>
