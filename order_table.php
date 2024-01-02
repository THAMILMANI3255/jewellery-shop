<?php
include("config.php");
include("header.php");
?>
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        
      <div class="article">
          <h2><span> Order Table</span></h2>
          <div class="clr"></div>
          <form action="" method="post" id="sendemail">
            <ol>

            <li>
                <label for="name">Order id</label>
                <input id="order_id" type="text" class="text"  name="order_id" required />
              </li>  
                          
            <li>
                <label for="name">Product name</label>
                <input id="product_name" type="text" class="text"  name="product_name" required />
              </li>
            <li>
                <label for="name">Product Id</label>
                <input id="product_id" type="text" class="text"  name="product_id" required />
            </li>
             
            <li>
                <label for="name">Product Quantity</label>
                <input id="product_quantity" type="text" class="text"  name="product_quantity" required />
              </li>  
        
                                          
              <li>
                <label for="name">Product Price</label>
                <input id="product_price" type="text" class="text"  name="product_price" required />
              </li>
              
              <li>
                <input type="submit" name="submit" class="send" value="Submit" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
       </div>
     <div class="clr"></div>
    </div>
  </div>
<?php
if(isset($_POST['submit']))
{
$order_id=$_POST['order_id'];
$product_name=$_POST['product_name'];
$product_id=$_POST['product_id'];
$product_quantity=$_POST['product_quantity'];
$product_price=$_POST['product_price'];
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Order  table already exists');</script>";
}
else
{
mysql_query("insert into order(order_id,product_name,product_id,product_quantity,product_price)values('$order_id','$product_name','$product_id','$product_quantity','$product_price')");
echo "<script type='text/javascript'>alert('Order table registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=student_login.php">';
}

}
?>
<?php
include("footer.php");
?>
