<html> 
<script> 
function activate(p) { 
 if(p=='b1') 
 { 
 document.getElementById("b1").disabled = false; 
 document.getElementById("b2").disabled = true; 
 document.getElementById("b3").disabled = true; 
 document.getElementById("b4").disabled = true; 
 document.getElementById("b5").disabled = true; 
 document.getElementById("b6").disabled = true; 
 } 
 
 if(p=='b2') 
 { 
 document.getElementById("b1").disabled = true; 
 document.getElementById("b2").disabled = false; 
 document.getElementById("b3").disabled = true; 
 document.getElementById("b4").disabled = true; 
 document.getElementById("b5").disabled = true; 
 document.getElementById("b6").disabled = true; 
 } 
 
 if(p=='b3') 
 { 
 document.getElementById("b1").disabled = true; 
 document.getElementById("b2").disabled = true; 
 document.getElementById("b3").disabled = false; 
 document.getElementById("b4").disabled = true; 
 document.getElementById("b5").disabled = true; 
 document.getElementById("b6").disabled = true; 
 } 
 
 if(p=='b4') 
 { 
 document.getElementById("b1").disabled = true; 
 document.getElementById("b2").disabled = true; 
 document.getElementById("b3").disabled = true; 
 document.getElementById("b4").disabled = false; 
 document.getElementById("b5").disabled = true; 
 document.getElementById("b6").disabled = true; 
 } 
 
 if(p=='b5') 
 { 
 document.getElementById("b1").disabled = true; 
 document.getElementById("b2").disabled = true; 
 document.getElementById("b3").disabled = true; 
 document.getElementById("b4").disabled = true; 
 document.getElementById("b5").disabled = false; 
 document.getElementById("b6").disabled = true; 
 } 
 
 if(p=='b6') 
 { 
 document.getElementById("b1").disabled = true; 
 document.getElementById("b2").disabled = true; 
 document.getElementById("b3").disabled = true; 
 document.getElementById("b4").disabled = true; 
 document.getElementById("b5").disabled = true; 
 document.getElementById("b6").disabled = false; 
 } 
 
} 
</script> 
<body> 
 <?php 
 session_start(); 
 if(isset($_SESSION['admin'])) 
 { 
 ?> 
 <?php echo 'Welcome',' ', $_SESSION['admin']['name'];?> 
 </a>&nbsp; 
 </li> 
 <li><a href="logout.php" class="btn btn-lg">log out 
 </a></li> 
 <?php 
 } 
 ?> 
<div style="height:400px;width:180px;background-color:#FFF;display:inline-block"> 
</div> 
<div style="height:500px;width:1000px;background-color:#0C9;display:inline-block"> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th rowspan="2" colspan="3"><h3 align="center">Admin Actions</h3></th> 
 </tr> 
 </thead> 
 <tr> 
 <td><b>Serial No.</b></td><td><b>Action Required</b></td><td><b>Submit</b></td> 
 </tr> 
 
 <tbody> 
 <form> 
 <tr> 
 <td><b>1.</b></td> 
 <td>View Order Details&nbsp; 
 <input type="radio" name="radio" onchange="activate('b1')"></td> 
 <td><a href="Admin_View_Order.php" target="_blank"> 
 <button type="button" id='b1'disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 
 <tr> 
 <td><b>2.</b></td> 
 <td>View Product Details&nbsp; 
 <input type="radio" name="radio" value="r2" onchange="activate('b2')"></td> 
 <td><a class="anchor" 
 href="Admin_view_existing_product_details.php" target="_blank"> 
 <button type="button" id='b2'disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 
 <tr> 
 <td><b>3.</b></td> 
 <td>View Customer Details&nbsp; 
 <input type="radio" name="radio" id="r3" onclick="activate('b3')"></td> 
 <td><a class="anchor" href="Admin_Customer_Details.php" target="_blank"> 
 <button type="button" id='b3' disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 <tr> 
 <td><b>4.</b></td> 
 <td>Input New Product&nbsp; 
 <input type="radio" name="radio" id="r4" onclick="activate('b4')"></td> 
 <td><a class="anchor" href="Product_data_insert.php" target="_blank"> 
 <button type="button" id='b4' disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 <tr> 
 <td><b>5.</b></td> 
 <td>Update Existing Product Details&nbsp; 
 <input type="radio" name="radio" id="r5" onclick="activate('b5')"></td> 
 <td><a class="anchor" href="Admin_Update_Product_Details.php" 
 target="_blank"> 
 <button type="button" id='b5'disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 <tr> 
 <td><b>6.</b></td> 
 <td>Delete Existing Product&nbsp; 
 <input type="radio" name="radio" id="r6" onclick="activate('b6')"></td> 
 <td><a class="anchor" href="Admin_Delete_Product.php" target="_blank"> 
 <button type="button" id='b6'disabled> 
 SUBMIT</button></a></td> 
 </tr> 
 </tbody> 
 </table> 
</body> 
</html> 