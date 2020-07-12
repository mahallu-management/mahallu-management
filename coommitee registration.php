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
            
			en_date=document.getElementById("dd").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				
            	flag=false;
				document.getElementById("d").style.visibility="visible";
			}
			else{
				document.getElementById("d").style.visibility="hidden";	
			}
        }
        if(document.getElementById("ee").value=="")
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
            
			en_date=document.getElementById("ee").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) > 0){
				
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
<form action="" method="post">
<table class="table table-bordered">
  <tr>
    <td>Commitee Name </td>
    <td><label>
      <input type="text" name="textfield" id="aa" class="form-control"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Type</td>
    <td><label>
      <input type="text" name="text" id="bb" class="form-control"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    
  </tr>
   <tr>
    <td>Status</td>
    <td><label>
      <input type="text" name="texttt" id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    
  </tr>
  <tr>
    <td>Established Date </td>
    <td><label>
      <input type="date" name="textfield2" id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Expire Date </td>
    <td><label>
      <input type="date" name="textfield3" id="ee" class="form-control"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><label>
      <input type="email" name="textfield4" id="ff" class="form-control"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input type="text" name="textfield5" id="gg" class="form-control"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
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
	$name=$_POST['textfield'];
	$type=$_POST['text'];
	$edate=$_POST['textfield2'];
	$exdate=$_POST['textfield3'];
	$status=$_POST['texttt'];
	$username=$_POST['textfield4'];
	$password=$_POST['textfield5'];
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$username','$password','committee')");
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO `committee` VALUES(NULL,'$name','$type','$status','$edate','$exdate','$lid')");
	if($qry>0)
	{
		?>
        <script>
		alert("Suceessfully added Committee...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>
<?php include("footer.php")?>