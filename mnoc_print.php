<?php include("adminheader.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function printDiv(){
        var printContents = document.getElementById("pr").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
}
</script>
</head>

<body>
<form action="" method="post">

	  <?php
	$noc_id=$_GET['id'];
	include("connect.php");
	$qry=mysql_query("SELECT mnoc.*,adminfamilymember.mem_nm FROM mnoc INNER JOIN adminfamilymember ON mnoc.mem_id=adminfamilymember.family_mem_id AND `mnoc`.`n_id`='$noc_id'");
	if(mysql_num_rows($qry)>0)
	{
		$row=mysql_fetch_array($qry);
	?>
	
	<div id="pr">
	
	<table width="305" height="374" border="0" align="center">
   <tr>
    <td height="60" colspan="2"><h2 align="center">Marriage Noc</h2></td>
       
  </tr>
  <tr>
    <td width="166">Member Name:</td>
    <td width="128"><?php echo $row['mem_nm']?></td>
        
  </tr>
  <tr>
    <td>Family Name:</td>
    <td><?php echo $row['family']?></td>
  </tr>
 
  <tr>
    <td>Father Name</td>
    <td><?php echo $row['mrg_father']?></td>
  </tr>
  <tr>
    <td>Mother Name</td>
    <td><?php echo $row['mrg_mother']?></td>
  </tr>
 <tr>
    <td>Guardian</td>
    <td><?php echo $row['mrg_guardian']?></td>
  </tr>
  <tr>
    <td>Addreess</td>
    <td><?php echo $row['mrg_add']?></td>
  </tr>
  
  <tr>
    <td>Education</td>
    <td><?php echo $row['education']?></td>
  </tr>
  
   <tr>
    <td>Religious Education</td>
    <td><?php echo $row['religiouseduc']?></td>
  </tr>
  <tr>
    <td>NOC Registration No:</td>
    <td><?php echo $row['nocregno']?></td>
  </tr>
  
	</table>
	<p>&nbsp;</p>
	<?php
	}
	?>
		
		</div>
  <table border="0" width="400" align="center">
  
  
  <tr>
    <td colspan="2" align="center"><label>
      <div align="center">
        <input type="button" name="Submit" value="Print" onclick="printDiv()" class="btn btn-success"/>
      </div>
    </label></td>
    </tr>
</table>
	
</form>
</body>
</html>


<?php include("footer.php")?>