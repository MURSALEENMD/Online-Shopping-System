<?php 
$con=mysqli_connect("localhost","root","","shopping"); 
$sql="SELECT * from order_table"; 
$r=mysqli_query($con,$sql); 
?> 
<html> 
<body> 
<form action="Admin_approved_Order.php" method="post"> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="9"><h3><center>View Order Details</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr> 
 <td><b>Order ID</b></td> 
 <td><b>Product ID</b></td> 
 <td><b>Product Name</b></td> 
 <td><b>Product Quantity</b></td> 
 <td><b>Price</b></td> 
 <td><b>Customer Mobile Number</b></td> 
 <td><b>Customer Name</b></td> 
 <td><b>Pay Method</b></td> 
 <td><b>Approve or not</b></td> 
 </tr> 
 <?php 
while($row=mysqli_fetch_assoc($r)) 
{ 
 ?> 
 <tr> 
 <td><?php echo $row['order_id'];?></td> 
 <td><?php echo $row['p_id'];?></td> 
 <td><?php echo $row['p_name'];?></td> 
 <td><?php echo $row['qty'];?></td> 
 <td><?php echo $row['price'];?></td> 
 <td><?php echo $row['mob_number'];?></td> 
 <td><?php echo $row['username'];?></td> 
 <td><?php echo $row['pay_method'];?></td> 
 <td><input type="checkbox"></td> 
 </tr> 
 
 <?php 
} ?> 
 <tr class="active" align="center"> 
 <td colspan="9"> 
 <button type="SUBMIT" class="btn btn-primary">SUBMIT</button></td> 
 </tr> 
 </tbody> 
 </table> 
</form> 
</body> 
</html> 
Admin_View_existing_product_details.php
<html> 
<body> 
<form action="Admin_marked_product.php" method="post" enctype="multipart/form-data"> 
<div style="width:200px;margin-left:190px;display:inline-block;"> 
<h2></h2> 
<?php 
$con=mysqli_connect("localhost","root","","shopping"); 
$sql="SELECT * from product_detail"; 
$r=mysqli_query($con,$sql); 
?> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="8"><h3><center>View Product Details</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 
 <?php 
 while($row=mysqli_fetch_assoc($r)) 
 { 
 ?> 
 <tr> 
 <td><b>Product ID</b></td> 
 <td><b>Product Name</b></td> 
 <td><b>Product Description</b></td> 
 <td><b>Stock</b></td> 
 <td><b>Price</b></td> 
 <td><b>Product Type</b></td> 
 <td><b>Admin Marked</b></td> 
 </tr> 
 <tr> 
 <td><?php echo $row['p_id'];?></td> 
 <td><?php echo $row['p_name'];?></td> 
 <td><?php echo $row['p_description'];?></td> 
 <td><?php echo $row['stock'];?></td> 
 <td><?php echo $row['price'];?></td> 
 <td><?php echo $row['p_type'];?></td> 
 <td><input type="checkbox"></td> 
 </tr> 
 <?php 
} ?> 
 <tr class="active" align="center"> 
 <td colspan="8"> 
 <button type="SUBMIT" class="btn btn-primary">SUBMIT</button></td> 
 </tr> 
 </tbody> 
 </table> 
</form> 
</body> 
</html> 