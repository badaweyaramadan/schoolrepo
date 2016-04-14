<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="right">


<a href="index.php">الرئيسية</a> &nbsp;&nbsp;&nbsp;

</div>


<?php
$HostName="localhost";
$db_name="schooldb";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>

<br/>
  ser:  <?php echo "$row[st_id]"."   "?>

<br/>

  name:  <?php echo "$row[st_name]"."   "?>

<br/>

 age:  <?php echo "$row[st_age]"."<hr>"?>
 <br/>
   class:  <?php echo "$row[st_class]"."   "?>

 
  <?php
	;}
	 mysql_close($con);
	
	
	?>
    
  <br/>
  <br/>

    <a href="stupdate.php" > <input type="submit" value="update" > </a>
 
 <a href="stdelete.php"> <input type="submit" value="delete" /></a>
 
<br/>
<br/>



<a href="index.php">الرئيسية</a> &nbsp;&nbsp;&nbsp;
<a href="stinsert.php">إدخال طلاب</a> &nbsp;&nbsp;&nbsp;
<a href="stselect.php">عرض طلاب</a> &nbsp;&nbsp;&nbsp;
<a href="stdelete.php">حذف طلاب</a> &nbsp;&nbsp;&nbsp;
<a href="stupdate.php">تعديل طلاب</a> &nbsp;&nbsp;&nbsp;
<a href="teinsert.php">ادخال معلمين</a> &nbsp;&nbsp;&nbsp;
<a href="teselect.php">عرض معلمين</a> &nbsp;&nbsp;&nbsp;
<a href="tedelete.php">حذف معلمين</a> &nbsp;&nbsp;&nbsp;
<a href="teupdate.php">تعديل معلمين</a> &nbsp;&nbsp;&nbsp





</body>
</html>