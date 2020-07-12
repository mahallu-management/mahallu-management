<?php include("committeeheader.php")?>
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
	$qry=mysql_query("SELECT * FROM asset_registration");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
    <th width="58">SI.NO</th>
    <th width="100">ASSET</th>
    <th width="135">PLACE</th>
    <th width="105">CATEGORY</th>
    
  </tr>
	</thead>
	<tbody>
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++;?></td>
      <td><?php echo $row['ast_nm']?></td>
       <td><?php echo $row['place']?></td>
       <td><?php echo $row['category']?></td> 
      
   
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