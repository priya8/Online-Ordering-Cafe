<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("cafe");
$sql=mysql_query("insert into details (name,tel,mail) values('$_POST[t1]','$_POST[t2]','$_POST[t3]')");
echo "DELIVERY ON YOUR DOORSTEPS!!!";
mysql_close($con);
?>
<form>
<a href="ganesh.xhtml"><img src="/opt/lampp/htdocs/ipimages/home.jpg"></img></a>
<input type="button" value="GO HOME"/ >
</form>
</body>
</html>
