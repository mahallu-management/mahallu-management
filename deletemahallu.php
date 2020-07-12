<?php
include("connect.php");
$aid=$_GET['id'];
$qry=mysql_query("DELETE FROM mahallu_reg WHERE m_id='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="adminhome.php";
</script>
<?php
}?>