<?php include("adminheader.php")?>

<form id="form1" name="form1" method="post" action="">
</form>
<table class="table table-bordered">
  <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM institution_reg");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <tr>
    <td width="73">SI.NO</td>
    <td width="57">INSTITUTION NAME</td>
    <td width="87">PLACE</td>
    <td width="95">TYPE</td>
    <td width="31">PHONE</td>
    <td width="65">ESTABLISHED DATE</td>
    <td width="60">EMAIL</td>
     <td width="60"></td>
    
    
  </tr>
  
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['inst_nm']?></td>
       <td><?php echo $row['inst_place']?></td>
       <td><?php echo $row['inst_type']?></td> 
       <td><?php echo $row['inst_ph']?></td>
        <td><?php echo $row['inst_es_date']?></td>
         <td><?php echo $row['inst_email']?></td>
          <td width="50px"><a href="deleteins.php?id=<?php echo $row['inst_id']?>" class="btn btn-danger">DELETE</a></td>

      
   
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