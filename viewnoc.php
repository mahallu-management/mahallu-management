<?php include("adminheader.php")?>

<form id="form1" name="form1" method="post" action="">
</form>
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT mnoc.*,adminfamilymember.mem_nm FROM mnoc inner join adminfamilymember on mnoc.mem_id=adminfamilymember.family_mem_id");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <tr>
    <td width="73">SI.NO</td>
   
    <td width="57">MEMBER NAME</td>
   
    <td width="95">FAMILY</td>
   
    <td width="60">FATHER</td>
     <td width="60">MOTHER</td>
    
   
    
     <td width="60">NOC REGISTER NO:</td>
   
      
    
   <td></td>
  </tr>
  
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
    
      <td><?php echo $row['mem_nm']?></td>
      
       <td><?php echo $row['family']?></td> 
       
         <td><?php echo $row['mrg_father']?></td>
         <td><?php echo $row['mrg_mother']?></td>
      
         <td><?php echo $row['nocregno']?></td>
 <td ><a href="deletenoc.php?id=<?php echo $row['n_id']?>" class="btn btn-danger">DELETE</a>
	 &nbsp;&nbsp;<a href="mnoc_print.php?id=<?php echo $row['n_id']?>" class="btn btn-primary">PRINT</a>
		
		</td>

      
   
  </tr><?php
	}?>
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

<?php include("footer.php")?>