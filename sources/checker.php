<?php
$conn=mysql_connect("localhost","root","root") or die("can't connect this database");
mysql_select_db("project",$conn);
$sql="select * from user order by id DESC";
$query=mysql_query($sql);
if(mysql_num_rows($query) == "")
{
echo "<tr><td colspan='5' align='center'>Chua co username nao</td></tr>";
}
?>


