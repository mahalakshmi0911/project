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
		
			<h1 class="title">Manage Users</h1>
			<div class="entry">
				
				
				
				
				
				
				<form method = post>
<table align = center>
<tr>
<td>
Enter User ID</td><td><input type = text name = u_id></td>
<tr>

<td>Enter First Name</td> <td><input type = text name = u_fnm></td>
</tr>
<tr>
<td>
UserName</td><td><input type = text name = u_unm></td>
<tr>
<td>Password</td><td><input type = text name = u_pwd></td>
</tr>
<td>Gender</td><td><input type = text name = u_gender></td>
</tr>
<td>Email ID</td><td><input type = text name = u_email></td>
</tr>
<tr><td>Contact</td><td><input type = text name = u_contact></td>
</tr>
<tr><td>City</td><td><input type = text name = u_city></td>
</tr>
<tr>
<td colspan = 2>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$u_id = $_POST['u_id'];
$u_fnm = $_POST['u_fnm'];
$u_unm = $_POST['u_unm'];
$u_pwd = $_POST['u_pwd'];
$u_gender = $_POST['u_gender'];
$u_email = $_POST['u_email'];
$u_contact = $_POST['u_contact'];
$u_city = $_POST['u_city'];


$query = "insert into user values($u_id,'$u_fnm','$u_unm','$u_pwd','$u_gender','$u_email','$u_contact','$u_city')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$u_id = $_POST['u_id'];
$u_fnm = $_POST['u_fnm'];
$u_unm = $_POST['u_unm'];
$u_pwd = $_POST['u_pwd'];
$u_gender = $_POST['u_gender'];
$u_email = $_POST['u_email'];
$u_contact = $_POST['u_contact'];
$u_city = $_POST['u_city'];

$query = "update user set u_fnm='$u_fnm',u_pwd='$u_pwd',u_gender='$u_gender',u_email='$u_email',u_contact='$u_contact',u_city='$u_city' where u_id=$u_id";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$u_id = $_POST['u_id'];
$u_fnm = $_POST['u_fnm'];
$u_unm = $_POST['u_unm'];
$u_pwd = $_POST['u_pwd'];
$u_gender = $_POST['u_gender'];
$u_email = $_POST['u_email'];
$u_contact = $_POST['u_contact'];
$u_city = $_POST['u_city'];

$query = "delete from user where u_id=$u_id";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$u_id = $_POST['u_id'];
$u_fnm = $_POST['u_fnm'];
$u_unm = $_POST['u_unm'];
$u_pwd = $_POST['u_pwd'];
$u_gender = $_POST['u_gender'];
$u_email = $_POST['u_email'];
$u_contact = $_POST['u_contact'];
$u_city = $_POST['u_city'];

$query = "select * from user";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<th>User ID</th>";
echo "<th>First Name</th>";
echo "<th>UserName</th>";
echo "<th>Password</th>";
echo "<th>Gender</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
echo "<th>City</th>";
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
