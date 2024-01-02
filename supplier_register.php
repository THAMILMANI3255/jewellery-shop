<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>Supplier Details</h3>
		   <div class="col-md-6 contact-top">
		   
          <form action="" method="post" id="sendemail">
                          
            <div class="con-text">
			   <span>Supplier name</span>	
                <input id="supplier_name" type="text" class="text"  name="supplier_name" required pattern="[a-zA-Z]+" oninput="this.value=this.value.replace(/[^a-zA-Z]/g,'');" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"   />
              </div>
            <div class="con-text">
			   <span>Supplier Address</span>	
                <input id="supplier_adress" type="text" class="text"  name="supplier_address" required />
              </div>
              
            <div class="con-text">
			   <span>Email</span>	
                <input id="name" type="email" class="text"  name="email" required />
              </div>            
              
            <div class="con-text">
			   <span>Phone</span>	
                <input id="name" type="text" class="text"  name="phone" required pattern="[1-9]{1}[0-9]{9}"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  />
              </div>
        
                                          
              <div class="con-text">
			   <span>Supply</span>	
                <input id="name" type="text" class="text"  name="supply" required />
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
$supplier_name=$_POST['supplier_name'];
$supply=$_POST['supply'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$supplier_address=$_POST['supplier_address'];

$q=mysql_query("select * from  supplier_register where supplier_name='$supplier_name' and supply='$supply'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Supplier already exists');</script>";
}
else
{
mysql_query("insert into supplier_register(supplier_name,email,phone,supply,adress)values('$supplier_name','$email','$phone','$supply','$supplier_address')");
echo "<script type='text/javascript'>alert('Supplier added  successfully');</script>";
}

}
?>
<?php
include("footer.php");
?>
