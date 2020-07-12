<?php
include("connect.php");
$aid=$_GET['id'];
$qry=mysql_query("DELETE FROM ledger_account_reg WHERE lg_id='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted..!");
window.location="accountview.php";
</script>
<?php
}?>