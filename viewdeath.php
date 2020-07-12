<?php include("adminheader.php")?>

<form id="form1" name="form1" method="post" action="">
</form>
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `adminfamilymember` where not mem_d_place='not'");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <tr>
    <td width="73">SI.NO</td>
    <td width="57">Member Name:</td>
    <td width="87">Death Date</td>
    <td width="95">Death Place</td>
     <td width="87">Death Reason</td>
    <td width="95">Death Informer</td>
   
    
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
       <td><?php echo $row['mem_d_date']?></td>
       <td><?php echo $row['mem_d_place']?></td> 
        <td><?php echo $row['mem_d_reason']?></td>
       <td><?php echo $row['mem_d_informer']?></td> 
       
 
  
  

      
   
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