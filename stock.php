<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>View Product Stock</h3>
		   <div class="col-md-12 contact-top">
		   <form name="" action="" method="post">
		   <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
		   <tr><td>Product id</td><td>Product name</td><td>Product Image</td><td>Supplier</td><td>Price</td><td>Gst</td><td>Weight(In grams)</td><td>Stock</td><td>Quantity</td></tr>
		   <?php
		   $q=mysql_query("select * from  product_table");
		    while($m=mysql_fetch_array($q))
			   {
			   $productid=$m['productid'];
			   $supplier_id=$m['supplier_id'];
			   $product_name=$m['product_name'];
			   $product_price=$m['product_price'];
			   $product_quantity=$m['product_quantity'];
			   $product_id=$m['product_id'];
			   $pimg=$m['pimg'];
			   $pgst=$m['pgst'];
			   $pweight=$m['pweight'];
			   
		   			   echo "<tr><td><input type='radio' name='pid[]' value='$product_id' />$productid</td><td>$product_name</td><td><img src='upload/$pimg' /></td><td>$supplier_id</td><td>$product_price</td><td>$pgst</td><td>$pweight</td><td>$product_quantity</td><td><input type='text' name='qty[]' value='' /></td></tr>";
			   }
		   ?>

		   </table>
		   <input type='submit' name='place_order' value='Place Order'>
          </form>
        </div>
      
      <div class="clr"></div><div class="clr"></div>
    </div>
  </div>

<?php

if(isset($_POST['place_order']))
{
$pid=array_filter($_POST['pid']);
$pids=implode(",",$pid);
$pids1=explode(",","$pids");

$qty=array_filter($_POST['qty']);
$qtys=implode(",",$qty);
$qtys1=explode(",","$qtys");
$date=date("Y-m-d");
$otime=date("H:i:s");
$cnt=count($pids1);



$uid=$_SESSION['uname'];
for($i=0;$i<$cnt;$i++)
{
$q=mysql_query("SELECT * FROM `product_table` WHERE product_id='$pids1[$i]'")or die(mysql_error());
$c=mysql_num_rows($q);
if($c>0)
{
while($r=mysql_fetch_array($q))
{
$old_sold=$r['product_quantity'];
$product_name=$r['product_name'];
$product_price=$r['product_price'];
$pgst=$r['pgst'];
$pweight=$r['pweight'];
$qty_1=$old_sold-$qtys1[$i];

$price=((($product_price)*($pgst/100))+($product_price))*$qtys1[$i];



mysql_query("update product_table set product_quantity='$qty_1' where product_id='$pids1[$i]'");
}
}
mysql_query("insert into `order_table`(product_id,product_name,product_quantity,uid,odate,pprice,gst,price,pweight)values('$pids1[$i]','$product_name','$qtys1[$i]','$uid','$date','$product_price','$pgst','$price','$pweight')")or die(mysql_error());
}
}


include("footer.php");
?>
