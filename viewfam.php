<?php include("adminheader.php")?>

<form id="form1" name="form1" method="post" action="">
</form>
<table class="table table-bordered">
	
	
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `adminfamilymember`");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <tr>
    <td width="73">SI.NO</td>
    <td width="57">Member:</td>
    <td width="87">House No</td>
    <td width="95">PHONE</td>
   
    
    <td width="60"></td>
     
    
  </tr>
  
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['mem_nm']?></td>
       <td><?php echo $row['hs_no']?></td>
       <td><?php echo $row['mob']?></td> 
       
 
  
   <td width="50px"><a href="deleteadminfamilymember.php?id=<?php echo $row['family_mem_id']?>" class="btn btn-danger">DELETE</a></td>

      
   
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