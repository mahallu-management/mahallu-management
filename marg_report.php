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
	$qry=mysql_query("SELECT marriage_reg.*,adminfamilymember.mem_nm FROM marriage_reg INNER JOIN adminfamilymember ON marriage_reg.mem_id=adminfamilymember.family_mem_id WHERE `marriage_reg`.`mrg_nik_date` BETWEEN '$from' AND '$to'");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
         <th width="73">SI.NO</th>
   
    <th width="57">MEMBER NAME</th>
   
    <th width="95">MALE NAME</th>
    <th width="31">FEMALE NAME</th>
    <th width="65">HOUSE NO:</th>
    <th width="60">FATHER</th>
     <th width="60">MOTHER</th>
	  <th width="60">NIKAH DATE</th>
   
      <th width="60">MAHAR</th>
     <th width="60">VERIFIED PERSON</th>
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
      <td><?php echo $row['mem_nm']?></td>
      
       <td><?php echo $row['mrg_nm_m']?></td> 
       <td><?php echo $row['mrg_nm_f']?></td>
        <td><?php echo $row['hs_no']?></td>
         <td><?php echo $row['mrg_father']?></td>
         <td><?php echo $row['mrg_mother']?></td>
         
       <td><?php echo $row['mrg_nik_date']?></td>
       
         <td><?php echo $row['mrg_mahar']?></td>
         <td><?php echo $row['mrg_v_person']?></td>
      
   
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
	$qry=mysql_query("SELECT marriage_reg.*,adminfamilymember.mem_nm FROM marriage_reg inner join adminfamilymember on marriage_reg.mem_id=adminfamilymember.family_mem_id");
	if(mysql_num_rows($qry)>0)
	{
	?>
	<thead class="thead-dark">
  <tr>
    <th width="73">SI.NO</th>
   
    <th width="57">MEMBER NAME</th>
   
    <th width="95">MALE NAME</th>
    <th width="31">FEMALE NAME</th>
    <th width="65">HOUSE NO:</th>
    <th width="60">FATHER</th>
     <th width="60">MOTHER</th>
	  <th width="60">NIKAH DATE</th>
   
      <th width="60">MAHAR</th>
     <th width="60">VERIFIED PERSON</th>
    
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
            <td><?php echo $row['mem_nm']?></td>
      
       <td><?php echo $row['mrg_nm_m']?></td> 
       <td><?php echo $row['mrg_nm_f']?></td>
        <td><?php echo $row['hs_no']?></td>
         <td><?php echo $row['mrg_father']?></td>
         <td><?php echo $row['mrg_mother']?></td>
         
       <td><?php echo $row['mrg_nik_date']?></td>
       
         <td><?php echo $row['mrg_mahar']?></td>
         <td><?php echo $row['mrg_v_person']?></td>
      
   
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