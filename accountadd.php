<?php include("adminheader.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
    function validate()
    {
        var flag=true;
		if(document.getElementById("rn").value=="")
        {
            flag=false;
            document.getElementById("r").style.visibility="visible";
        }
        else
        {
            document.getElementById("r").style.visibility="hidden";
        }
        if(document.getElementById("aa").value=="")
        {
            flag=false;
            document.getElementById("a").style.visibility="visible";
        }
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
        if(document.getElementById("bb").value=="")
        {
            flag=false;
            document.getElementById("b").style.visibility="visible";
        }
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
       
       /* if(document.getElementById("dd").value=="")
        {
            flag=false;
            document.getElementById("d").style.visibility="visible";
        }
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }*/
        if(document.getElementById("ee").value=="")
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
		 return flag;
    }
    </script>
</head>

<body>
<form action="" method="post">
<table class="table table-bordered">
  <tr>
    <td>Ledger Name </td>
    <td><label>
      <input type="text" name="textfield" id="aa" class="form-control"/>
    </label></td>
       <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Type</td>
    <td><label>
      <input type="text" name="text" id="bb" class="form-control" />
    </label></td>
       <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    
  </tr>
  
 <tr>
    <td>Amount:</td>
     
    <td><select name="rn" id="rn" class="form-control" >
    <option value="">select</option>
    <?php
    	include("connect.php");
   
        $qry=mysql_query("SELECT * FROM asset_collection");
  if(mysql_num_rows($qry)>0)
  {

    while($row=mysql_fetch_array($qry)){
      ?>

        <option value="<?php echo $row['ast_t_amt']?>/<?php echo $row['coll_date']?>"><?php echo $row['ast_t_amt']?>/<?php echo $row['coll_date']?></option>
      <?php
    }
  }

    ?>
   
    </select></td>
     <td><div id="r" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Ledger Description </td>
    <td><label>
      <input type="text" name="textfield3" id="ee" class="form-control"/>
    </label></td>
       <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input type="submit" name="Submit" value="Submit" onclick="return validate()" class="btn btn-success"/>
      </label>
    </div></td>
    <td></td>
    </tr>
</table>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$name=$_POST['textfield'];
	$type=$_POST['text'];
	
	$exdate=$_POST['textfield3'];
	$rn=$_POST['rn'];
	
	
	
	$qry=mysql_query("INSERT INTO ledger_account_reg VALUES(NULL,'$name','$type','$rn','$exdate','$rn')");
	if($qry>0)
	{
		?>
        <script>
		alert("Suceessfully added ");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>
<?php include("footer.php")?>