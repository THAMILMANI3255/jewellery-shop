<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>Product Details</h3>
		   <div class="col-md-6 contact-top">
          <form action="" method="post" id="sendemail" enctype="multipart/form-data">
    

            <div class="con-text">
			   <span>Product id</span>
                <input id="product_name" type="text" class="text"  name="productid" required />
              </div>
			  
			                  
            <div class="con-text">
			   <span>Product name</span>
                <input id="product_name" type="text" class="text"  name="product_name" required  pattern="[a-zA-Z]+" oninput="this.value=this.value.replace(/[^a-zA-Z]/g,'');" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"/>
              </div>
			  
			  
            <div class="con-text">
			   <span>Product Image</span>
                <input id="product_name" type="file" class="text"  name="pimg" required />
              </div>			  
			  
            <div class="con-text">
			   <span>Supplier name</span>
			   <select name='supplier_id'>
			   <?php
			   $k=mysql_query("select * from  supplier_register")or die(mysql_error());
			   while($m=mysql_fetch_array($k))
			   {
			   $supplier_name=$m['supplier_name'];
			   echo "<option value='$supplier_name'>$supplier_name</option>";
			   }
			   ?>
			   </select>
              </div>
              
            <div class="con-text">
			   <span>Product Price</span>
                <input id="product_price" type="text" class="text"  name="product_price" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"   />
              </div>            
              
			  <div class="con-text">
			   <span>Product GST</span>
                <input id="product_name" type="text" class="text"  name="pgst" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  />
              </div>
			  
            <div class="con-text">
			   <span>Product Weight(In grams)</span>
                <input id="product_quantity" type="text" class="text"  name="pweight" required  oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  />
              </div> 
			  
			<div class="con-text">
			   <span>Product Quantity</span>
                <input id="product_quantity" type="text" class="text"  name="product_quantity" required  oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  />
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
$productid=$_POST['productid'];
$product_name=$_POST['product_name'];
$supplier_id=$_POST['supplier_id'];
$product_price=$_POST['product_price'];
$product_quantity=$_POST['product_quantity'];
$pgst=$_POST['pgst'];
$pweight=$_POST['pweight'];


$pimg=$_FILES['pimg']['name'];
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimg");

$q=mysql_query("select * from  product_table where product_name='$product_name' and supplier_id='$supplier_id'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Product already exists');</script>";
}
else
{
mysql_query("insert into product_table(productid,product_name,supplier_id,product_price,product_quantity,pimg,pgst,pweight)values('$productid','$product_name','$supplier_id','$product_price','$product_quantity','$pimg','$pgst','$pweight')");
echo "<script type='text/javascript'>alert('Product added successfully');</script>";
}

}
?>
<?php
include("footer.php");
?>
