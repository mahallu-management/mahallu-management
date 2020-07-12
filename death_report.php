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

<div align="right" style="width: 100%">
<table width="740"border="0" align="right">
	
	  <tr>
    <th width="193" align="right"></th>
    <th width="237"><input type="date" class="form-control" name="from"></th>
    <th width="196"><input type="date" class="form-control" name="to"></th>
    <th width="91" align="right"><input type="submit" class="btn btn-primary" name="submit" id="submit" value="Search"></th>
    
  </tr>
</table>
	</div>
<p>&nbsp;</p>
	<?php
	if(isset($_POST['submit'])){
		
		$from = $_POST['from'];
		$to = $_POST['to'];
	?>
	<div id="pr">
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `adminfamilymember` WHERE NOT mem_d_place='not' AND mem_d_date BETWEEN '$from' and '$to'");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
    <th width="73">SI.NO</th>
    <th width="57">Member Name:</th>
    <th width="87">Death Date</th>
    <th width="95">Death Place</th>
     <th width="87">Death Reason</th>
    <th width="95">Death Informer</th>
    
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
      <td><?php echo $row['mem_nm']?></td>
       <td><?php echo $row['mem_d_date']?></td>
       <td><?php echo $row['mem_d_place']?></td> 
        <td><?php echo $row['mem_d_reason']?></td>
       <td><?php echo $row['mem_d_informer']?></td> 
      
   
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
	
	<?php
		
	}
else{
	?>
	
	
	
	<div id="pr">
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `adminfamilymember`");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
    
    <th width="73">SI.NO</th>
    <th width="57">Member Name:</th>
    <th width="87">Death Date</th>
    <th width="95">Death Place</th>
     <th width="87">Death Reason</th>
    <th width="95">Death Informer</th>
    
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
      <td><?php echo $row['mem_nm']?></td>
       <td><?php echo $row['mem_d_date']?></td>
       <td><?php echo $row['mem_d_place']?></td> 
        <td><?php echo $row['mem_d_reason']?></td>
       <td><?php echo $row['mem_d_informer']?></td> 
      
   
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
	
	<?php
}
?>
	
	
	<div style="width: 100%" align="right"><input type="button" class="btn btn-secondary" onClick="printDiv()" name="submit" id="submit" value="Print">

  </div>
</form>
<?php include("footer.php")?>