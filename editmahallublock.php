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
        
        return flag;
    }
    </script>

</head>


<body>
<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM mahallu_block_reg WHERE `mlb_id`='$cid'");
$row=mysql_fetch_array($qry);
?>
<form action="" method="post">
<table class="table table-bordered">
  <tr>
    <td>Block Name </td>
    <td><label>
      <input type="text" name="textfield" value="<?php echo $row['mlb_nm']?>" id="aa" class="form-control" />
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><label>
      <input type="date" name="textfield2" value="<?php echo $row['mlb_date']?>" id="bb" class="form-control" />
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><label>
      <textarea name="textarea" id="cc" class="form-control" ><?php echo $row['mlb_des']?></textarea>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input type="submit" name="Submit" value="Submit" onclick="return validate()" class="btn btn-success"/>
      </label>
    </div></td>
    </tr>
</table>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$mname=$_POST['textfield'];
	$date=$_POST['textfield2'];
	$des=$_POST['textarea'];
	
	
	$qry=mysql_query("update `mahallu_block_reg` set mlb_nm='$mname',mlb_date='$date',mlb_des='$des' where mlb_id='$cid'");
	if($qry>0)
	{
		?>
         <script>
		alert("Mahallu block updated");
		window.location="adminhome.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Error");
		</script>
        <?php
	}
}
?>
<?php include("footer.php")?>
