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
         if(document.getElementById("ee").value.length!=6)
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
        if(document.getElementById("ff").value.length!=10)
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
        if(document.getElementById("ll").value=="")
        {
            flag=false;
            document.getElementById("l").style.visibility="visible";
        }
        else
        {
            document.getElementById("l").style.visibility="hidden";
        }
        if(document.getElementById("mm").value=="")
        {
            flag=false;
            document.getElementById("m").style.visibility="visible";
        }
        else
        {
            document.getElementById("m").style.visibility="hidden";
        }
		 if(document.getElementById("nn").value=="")
        {
            flag=false;
            document.getElementById("n").style.visibility="visible";
        }
        else
        {
            
			en_date=document.getElementById("nn").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				
            	flag=false;
				document.getElementById("n").style.visibility="visible";
			}
			else{
				document.getElementById("n").style.visibility="hidden";	
			}
        }
       
       
        return flag;
    }
    </script>

</head>

<body>
<form action="" method="post"><table class="table table-bordered">
  <tr>
    <td>House No </td>
    <td><label>
      <input type="text" name="textfield" id="aa" class="form-control"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>House Name </td>
    <td><label>
      <input type="text" name="textfield2" id="bb" class="form-control"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td>Place</td>
    <td><label>
      <input type="text" name="textfield4" id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>

  <tr>
    <td>Post </td>
    <td><label>
      <input type="text" name="textfield6" id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Pincode</td>
    <td><label>
      <input type="number" name="textfield7" id="ee" class="form-control"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><label>
      <input type="number" name="textfield8" id="ff" class="form-control"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Division</td>
    <td><label>
      <input type="text" name="textfield9" id="gg" class="form-control"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td>Division Name</td>
    <td><label>
      <input type="text" name="textfield10" id="hh" class="form-control"/>
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td height="38">Ward No</td>
    <td><label>
      <input type="text" name="textfield11" id="ii" class="form-control"/>
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Mahallu Block</td>
    <td><label>
      <input type="text" name="textfield12" id="jj" class="form-control"/>
    </label></td>
     <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>House Ownership</td>
    <td><label>
      <input type="text" name="textfield13" id="kk" class="form-control"/>
    </label></td>
     <td><div id="k" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>House Type</td>
    <td><label>
      <input type="text" name="textfield14" id="ll" class="form-control" />
    </label></td>
     <td><div id="l" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td height="38">Vehicles</td>
    <td><label>
      <input type="text" name="te" id="mm" class="form-control"/>
    </label></td>
     <td><div id="m" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Register Date</td>
    <td><label>
      <input type="date" name="tex" id="nn" class="form-control"/>
    </label></td>
     <td><div id="n" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Register" onclick="return validate()" class="btn btn-success"/>
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
	$houseno=$_POST['textfield'];
	
	
	$name=$_POST['textfield2'];

	$place=$_POST['textfield4'];
	
	$post=$_POST['textfield6'];
	
	$pincode=$_POST['textfield7'];
	
	$phone=$_POST['textfield8'];
	$division=$_POST['textfield9'];
	$div_name=$_POST['textfield10'];
	$ward=$_POST['textfield11'];
	
	$block=$_POST['textfield12'];
	$ownsp=$_POST['textfield13'];
	$type=$_POST['textfield14'];
	$veh=$_POST['tex'];
	$date=$_POST['tex'];
	
	
	$k=mysql_query("insert INTO `login` VALUES(NULL,'$houseno','$phone','family')");
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO `family_reg` VALUES(NULL,'$houseno','$name','$place','$post','$pincode','$phone','$division','$div_name','$ward','$block','$ownsp','$type','$veh','$date',$lid)");
	if($qry>0)
	{
		?>
        <script>
		alert("Sucessfully registered...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>

<?php include("footer.php")?>