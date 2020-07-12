<?php
include("connect.php");
$aid=$_GET['id'];
$qry=mysql_query("DELETE FROM `family_reg` WHERE family_reg_id='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="adminhome.php";
</script>
<?php
}?>