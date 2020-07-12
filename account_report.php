<?php include("adminheader.php")?>
<script>
function printDiv(){
        var printContents = document.getElementById("pr").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
}
</script>
<form id="form1" name="form1" method="post" action="">

	
	<div id="pr">
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM ledger_account_reg");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
      <th width="73">S/No:</th>
    <th width="73">Ledger Name</th>
    <th width="57">Type</th>
     <th width="31">Opening Balance</th>
      <th width="31">Current Balance</th>
    <th width="87">Description</th>
    
  </tr>
	</thead>
	<tbody>
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
        
      

      
   
  </tr><?php
	}?>
		
		</tbody>
</table>
	

      
 <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>
	</div>
	
	
	
	<div style="width: 100%" align="right"><input type="button" class="btn btn-secondary" onClick="printDiv()" name="submit" id="submit" value="Print">

  </div>
</form>
<?php include("footer.php")?>