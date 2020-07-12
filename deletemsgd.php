<?php
include("connect.php");
$aid=$_GET['id'];
$qry=mysql_query("DELETE FROM masjid_reg WHERE msgd_reg_no='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="adminhome.php";
</script>
<?php
}?>