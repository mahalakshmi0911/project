<?php session_start();
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	
	<div id="content">

		<div class="post">
		
			<h1 class="title">Manage Purchase Order</h1>
			<div class="entry">
				
				
				
				
				
				
				<form method = post>
Order Id <input type = text name = orderid>
<br/>
Enter Customer Name <input type = text name = customername>
<br/>
Contact   <input type = text name = contact>
<br/>
Email   <input type = text name = email>
<br/>
Book Name   <input type = text name = bookname>
<br/>
Category   <input type = text name = category>
<br/>

Rate   <input type = text name = rate>
<br/>
Quantity   <input type = text name = quantity>

<br/>
Total <input type = text name = total>
<br/>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$orderid = $_POST['orderid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bookname = $_POST['bookname'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$query = "insert into purchaseorder values($orderid,'$customername','$contact','$email','$bookname','$category','$rate','$quantity','$total')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$orderid = $_POST['orderid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bookname = $_POST['bookname'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$query = "update purchaseorder set customername='$customername',contact='$contact',email='$email',bookname='$bookname',category='$category',rate='$rate',quantity='$quantity',total='$total' where orderid=$orderid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$orderid = $_POST['orderid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bookname = $_POST['bookname'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$query = "delete from purchaseorder where orderid=$orderid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$orderid = $_POST['orderid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bookname = $_POST['bookname'];
$category = $_POST['category'];
$rate = $_POST['rate'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$query = "select * from purchaseorder";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<th>Order ID</th>";
echo "<th>Customer Name</th>";
echo "<th>Contact Number</th>";
echo "<th>Email</th>";
echo "<th>Book Name</th>";
echo "<th>Category</th>";
echo "<th>Rate</th>";
echo "<th>Quantity</th>";
echo "<th>Total Amount</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "</tr>";
}
echo "</table>";
}
?>
				
				
				
				
				
				
				
				
				<br/>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
