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


<form method="post">
 <pre>
 
 Name: <input name="s_name" type="text" /><br/>
 </pre>


<pre>
 age: <input name="s_age" type="text" /><br/>
</pre>


<pre>
class:<input name="s_class" type="text" /><br/>
</pre>


<input name="submit" type="submit" value="Insert" />
</form>
 

<?php 
$HostName="localhost";
$db_name="schooldb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['s_name']) && isset($_POST['s_age']) && isset($_POST['s_class']) ) 



{
$sql = "INSERT INTO student (st_name,st_age, st_class) VALUES ('$_POST[s_name]' ,'$_POST[s_age]',  '$_POST[s_class]')" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>


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