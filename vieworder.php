<?php
include("config.php");
include("header.php");
?>
<div class="contact">
    <div class="container">
           <h3>View Order</h3>
		   <div class="col-md-12 contact-top">
		   <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
		   <tr><td>Product Name</td><td>Quantity</td><td>Price</td><td>GST</td><td>Weight(In grams)</td><td>Total Price</td><td>Order date</td><td>User</td></tr>
		   <?php
		   $uid=$_SESSION['uname'];
		   if($_SESSION['aid']!='')
			{
		   $q=mysql_query("select * from  order_table");
			
			}
			else
			{
		   $q=mysql_query("select * from  order_table where uid='$uid'");
		   }
		    while($m=mysql_fetch_array($q))
			   {
			   $product_quantity=$m['product_quantity'];
			   $product_name=$m['product_name'];
			   $price=$m['price'];
			   $pprice=$m['pprice'];
			    $gst=$m['gst'];
			   $odate=$m['odate'];
			   $uid=$m['uid'];
			   $pweight=$m['pweight'];
			   
		   			   echo "<tr><td>$product_name</td><td>$product_quantity</td><td>$pprice</td><td>$gst</td><td>$pweight</td><td>$price</td><td>$odate</td><td>$uid</td></tr>";
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
