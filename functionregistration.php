<?php include("familyheader.php")?>
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
            
			en_date=document.getElementById("dd").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) > 0){
				
            	flag=false;
				document.getElementById("d").style.visibility="visible";
			}
			else{
				document.getElementById("d").style.visibility="hidden";	
			}
        }
		 if(document.getElementById("pg").value=="")
        {
            flag=false;
            document.getElementById("ppp").style.visibility="visible";
        }
        else
        {
            document.getElementById("ppp").style.visibility="hidden";
        }
        if(document.getElementById("ee").value=="")
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
			sn_date=document.getElementById("dd").value
			spl2=sn_date.split("-")
			inputTime1 = new Date(spl2[0] + "/" + spl2[1] + "/" + spl2[2]).getTime();
            
			en_date=document.getElementById("ee").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();

    		if((inputTime - inputTime1) < 0){
				
            	flag=false;
				document.getElementById("e").style.visibility="visible";
			}
			else{
				document.getElementById("e").style.visibility="hidden";	
			}
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
       
        return flag;
    }
    </script>

</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-bordered">
  <tr>
    <td>Program Name </td>
    <td>
      <input type="text" name="textfield" class="form-control" id="aa"/>
   </td>
    <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Place</td>
    <td><label>
      <input type="text" name="textfield2" class="form-control" id="bb"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><label>
      <input type="text" name="textfield3" class="form-control" id="cc"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Start Date</td>
    <td><label>
      <input type="date" name="textfield4" class="form-control" id="dd"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td>End Date</td>
    <td><label>
      <input type="date" name="textfield5" class="form-control" id="ee"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><label>
      <input type="text" name="textfield6" class="form-control" id="ff"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Type</td>
    <td><label>
      <input type="text" name="textfield7" class="form-control" id="gg"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Register No:</td>
    <td><label>
      <input type="text" name="pg" class="form-control" id="pg"/>
    </label></td>
     <td><div id="ppp" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
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
	$pname=$_POST['textfield'];
	$place=$_POST['textfield2'];

	$des=$_POST['textfield3'];
	$sdate=$_POST['textfield4'];
		$edate=$_POST['textfield5'];
	$status=$_POST['textfield6'];
	$type=$_POST['textfield7'];
	$pg=$_POST['pg'];
	
	$qry=mysql_query("INSERT INTO program_reg VALUES(NULL,'$pname','$type','$sdate','$edate','$place','$status','$des','$pg')");
	if($qry>0)
	{
		?>
         <script>
		alert("Program added");
		window.location="familyhome.php";
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