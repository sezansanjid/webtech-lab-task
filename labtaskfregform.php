<!DOCTYPE html>
<html >
<head>
	<title>Document</title>
</head>
<body bgcolor="powderblue" >
	
</body>
</html>


<?php
$isPost=false;
$username="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
name:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
Email:<input type="text" id="text" name = "email">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>


Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Must fill a box</small></span>";
}
?>
<br><br>
Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#

<input type="checkbox" name="skills[]" value="java">java
<input type="checkbox" name="skills[]" value="Python">Python
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Must put mark on a single box</small></span>";
}
?>

<br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>
<br><br>
Address:<textarea name="address" rowspan="4" colspan="30"></textarea>
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Fill the box</small></span>";
}
?>
<br><br>
<input type="submit" value="Log in" name="btnlogin">

</form>