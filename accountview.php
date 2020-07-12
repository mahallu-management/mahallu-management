<?php include("adminheader.php")?>

<form id="form1" name="form1" method="post" action="">

<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM ledger_account_reg");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <tr>
  <td width="73">S/No:</td>
    <td width="73">Ledger Name</td>
    <td width="57">Type</td>
     <td width="31">Opening Balance</td>
      <td width="31">Current Balance</td>
    <td width="87">Description</td>
    
    
    <td width="95"></td>
    <td width="31"></td>
   
   
  </tr>
  
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['lg_nm']?></td>
       <td><?php echo $row['lg_group']?></td>
     <td><?php echo $row['lg_op']?></td>
       <td><?php echo $row['lg_cu']?></td>
        <td><?php echo $row['lg_des']?></td>
        
      
   <td width="50px"><a href="updateaccount.php?id=<?php echo $row['lg_id']?>" class="btn btn-warning">EDIT</a></td>
  
  
   <td width="50px"><a href="deleteaccount.php?id=<?php echo $row['lg_id']?>" class="btn btn-danger">DELETE</a></td>
  </tr><?php
	}?>
</table>
</form>
 <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>

<?php include("footer.php")?>