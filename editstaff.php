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
        if(document.getElementById("ee").value=="")
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
        if(document.getElementById("ff").value=="")
        {
            flag=false;
            document.getElementById("f").style.visibility="visible";
        }
        else
        {
            document.getElementById("f").style.visibility="hidden";
        }
        if(document.getElementById("gg").value=="")
        {
            flag=false;
            document.getElementById("g").style.visibility="visible";
        }
        else
        {
            document.getElementById("g").style.visibility="hidden";
        }
        if(document.getElementById("hh").value=="")
        {
            flag=false;
            document.getElementById("h").style.visibility="visible";
        }
        else
        {
            document.getElementById("h").style.visibility="hidden";
        }
		if(document.getElementById("ii").value=="")
        {
            flag=false;
            document.getElementById("i").style.visibility="visible";
        }
        else
        {
            document.getElementById("i").style.visibility="hidden";
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
        if(document.getElementById("kk").value=="")
        {
            flag=false;
            document.getElementById("k").style.visibility="visible";
        }
        else
        {
            document.getElementById("k").style.visibility="hidden";
        }
       
        return flag;
    }
    </script>

</head>

<body>

<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM staff_reg WHERE staf_id='$cid'");
$row=mysql_fetch_array($qry);
?>
<form action="" method="post"><table class="table table-bordered">
 
  <tr>
    <td>Staff Name </td>
    <td><label>
      <input type="text" name="textfield2" value="<?php echo $row['st_nm']?>"  id="bb" class="form-control"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>House Name </td>
    <td><label>
      <input type="text" name="textfield26" value="<?php echo $row['st_hs_nm']?>"  id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>

  
  <tr>
    <td>Phone</td>
    <td><label>
      <input type="text" name="textfield7" value="<?php echo $row['st_mob']?>"  id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><label>
      <input type="date" name="textfield27" value="<?php echo $row['st_dob']?>"  id="ee" class="form-control"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label>
      <input type="text" name="textfield8" value="<?php echo $row['st_email']?>"  id="ff" class="form-control"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><label>
      <input type="text" name="textfield9" value="<?php echo $row['st_add']?>"  id="gg" class="form-control"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td>Staff Post</td>
    <td><label>
      <input type="text" name="textfield10" value="<?php echo $row['st_post']?>"  id="hh" class="form-control"/>
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td height="38">Join Date</td>
    <td><label>
      <input type="date" name="textfield11" value="<?php echo $row['st_join_date']?>"  id="ii" class="form-control"/>
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Salary</td>
    <td><label>
      <input type="text" name="textfield12" value="<?php echo $row['st_basic_sal']?>"  id="jj" class="form-control"/>
    </label></td>
     <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><label>
      <input type="text" name="textfield13" value="<?php echo $row['status']?>"  id="kk" class="form-control"/>
    </label></td>
     <td><div id="k" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Update" onclick="return validate()" class="btn btn-success" />
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

	$name=$_POST['textfield2'];

	$re=$_POST['textfield26'];
	
	
	
	$phone=$_POST['textfield7'];
	$blood=$_POST['textfield27'];
	
	
	$email=$_POST['textfield8'];
	
	$fname=$_POST['textfield9'];
	
	$mname=$_POST['textfield10'];
	$marrg=$_POST['textfield11'];
	$adar=$_POST['textfield12'];
	
	$voter=$_POST['textfield13'];
	
	
	
	
	$qry=mysql_query("update staff_reg set `st_nm`='$name',`st_hs_nm`='$re',`st_mob`='$phone',`st_dob`='$blood',`st_email`='$email',`st_add`='$fname',`st_post`='$mname',`st_join_date`='$marrg',`st_basic_sal`='$adar',`status`='$voter' where staf_id='$cid' ");
	if($qry>0)
	{
		?>
        <script>
		alert("Sucessfully updated...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>

<?php include("footer.php")?>