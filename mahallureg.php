<?php include("adminheader.html")?>
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
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-bordered">
  <tr>
    <td>Mahallu Name </td>
    <td><label>
      <input type="text" name="textfield" id="aa" class="form-control"/>
    </label></td>
        <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Place</td>
    <td><label>
      <input type="text" name="textfield2" id="bb" class="form-control"/>
    </label></td>
        <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Post</td>
    <td><label>
      <input type="text" name="textfield3" id="cc" class="form-control"/>
    </label></td>
        <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Pincode</td>
    <td><label>
      <input type="text" name="textfield4" id="dd" class="form-control"/>
    </label></td>
        <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td>Phone</td>
    <td><label>
      <input type="text" name="textfield5" id="ee" class="form-control"/>
    </label></td>
        <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Wakf Reg No </td>
    <td><label>
      <input type="text" name="textfield6" id="ff" class="form-control"/>
    </label></td>
        <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Established On </td>
    <td><label>
      <input type="date" name="textfield7" id="gg" class="form-control"/>
    </label></td>
        <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Area</td>
    <td><label>
      <input type="text" name="textfield9" id="hh" class="form-control"/>
    </label></td>
        <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><label>
      <textarea name="textarea" id="ii" class="form-control"></textarea>
    </label></td>
        <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Path</td>
    <td><label>
      <input type="text" name="textfield10" id="jj" class="form-control"/>
    </label></td>
        <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td>Email</td>
    <td><label>
      <input type="text" name="textfield8" id="kk" class="form-control"/>
    </label></td>
        <td><div id="k" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input type="submit" name="Submit" value="Register" onclick="return validate()" class="btn btn-success"/>
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
	$place=$_POST['textfield2'];
	$post=$_POST['textfield3'];
	$pin=$_POST['textfield4'];
	
	$phone=$_POST['textfield5'];
	$wkf=$_POST['textfield6'];
	$esdate=$_POST['textfield7'];
	$area=$_POST['textfield9'];
	$des=$_POST['textarea'];
	$path=$_POST['textfield10'];
	$email=$_POST['textfield8'];
	$qry=mysql_query("INSERT INTO `mahallu_reg`(`m_id`,`ml_nm`,`place`,`post`,`pincode`,`phno`,`wakf_reg`,`es_date`,`area`,`des`,`path`,`email`) VALUES(NULL,'$mname','$place','$post','$pin','$phone','$wkf','$esdate','$area','$des','$path','$email')");
	if($qry>0)
	{
		?>
         <script>
		alert("Mahallu added");
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