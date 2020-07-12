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
        if(document.getElementById("cc").value=="")
        {
            flag=false;
            document.getElementById("c").style.visibility="visible";
        }
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
        if(document.getElementById("dd").value=="")
        {
            flag=false;
            document.getElementById("d").style.visibility="visible";
        }
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }
        
        if(document.getElementById("jj").value=="")
        {
            flag=false;
            document.getElementById("j").style.visibility="visible";
        }
        else
        {
            document.getElementById("j").style.visibility="hidden";
        }
       
        return flag;
    }
    </script>

</head>

<body>
<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM asset_registration WHERE `ast_id`='$cid'");
$row=mysql_fetch_array($qry);
?>
<form action="" method="post">
<table class="table table-bordered">
  <tr>
    <td>Asset Name </td>
    <td><label>
      <input type="text" name="textfield" value="<?php echo $row['ast_nm']?>" id="aa" class="form-control" />
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><label>
      <input type="text" name="textfield2" value="<?php echo $row['category']?>" id="bb" class="form-control" />
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Place</td>
    <td><label>
      <input type="text" name="textfield3" value="<?php echo $row['place']?>" id="cc" class="form-control" />
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><label>
      <textarea name="textarea" id="dd" class="form-control" ><?php echo $row['description']?></textarea>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  
 
  
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Submit" onclick="return validate()" class="btn btn-success"/>
        </div>
    </label></td>
    </tr>
</table>

</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$a=$_POST['a'];
	$assetname=$_POST['textfield'];
	$category=$_POST['textfield2'];
	$place=$_POST['textfield3'];
	$description=$_POST['textarea'];
	
	
	
	$qry=mysql_query("update `asset_registration` set ast_nm='$assetname',category='$category',place='$place',description='$description',status='$a' where ast_id='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("Asset updated...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>
<?php include("footer.php")?>