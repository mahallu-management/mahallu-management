<?php
include("connect.php");
$aid=$_GET['id'];
$qry=mysql_query("DELETE FROM staff_reg WHERE staf_id='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="viewstaff.php";
</script>
<?php
}?>