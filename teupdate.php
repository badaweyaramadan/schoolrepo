<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="schooldb";
$LoginName="root";
$LoginPassword="";




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE teacher SET  te_name= '$_GET[t_name]',te_subject='$_GET[t_subject]',te_class='$_GET[t_class]' WHERE  te_id= '$_GET[t_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
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
	$sql = "SELECT * FROM teacher" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form name="myform" method="get">
<input type="hidden" name="t_id" value="<?php echo "$row[te_id]"?>" />
  name <input type="text" name="t_name" value="<?php echo "$row[te_name]"?>" />



 subject<input type="text" name="t_subject" value=" <?php echo "$row[te_subject]"?>">
 class<input type="text" name="t_class" value=" <?php echo "$row[te_class]"?>">
  <input type="submit" value="edit" /><hr />
</form>
  <?php
	;}
	 mysql_close($con);
	?>
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