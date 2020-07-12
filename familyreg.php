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
            document.getElementById("n").style.visibility="hidden";
        }
        if(document.getElementById("oo").value=="")
        {
            flag=false;
            document.getElementById("o").style.visibility="visible";
        }
        else
        {
            document.getElementById("o").style.visibility="hidden";
        }
        if(document.getElementById("pp").value=="")
        {
            flag=false;
            document.getElementById("p").style.visibility="visible";
        }
        else
        {
            document.getElementById("p").style.visibility="hidden";
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
      <input type="text" name="textfield" id="aa"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Member Name </td>
    <td><label>
      <input type="text" name="textfield2" id="bb"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 <tr>
      <th scope="row"><div align="left">Gender:</div></th>
      <td><p>
        <label>
          <input type="radio" name="gender" value="male" id="gender_0" checked="checked"/>
          Male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="female" id="gender_1" />
          Female</label>
        <br />
        <label>
          <input type="radio" name="gender" value="others" id="gender_2" />
          Others</label>
        <br />
      </p></td>
    </tr>
  <tr>
    <td>Relation</td>
    <td><label>
      <input type="text" name="textfield4" id="cc"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>

  <tr>
    <td>Blood </td>
    <td><label>
      <input type="text" name="textfield6" id="dd"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><label>
      <input type="text" name="textfield7" id="ee"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label>
      <input type="text" name="textfield8" id="ff"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td><label>
      <input type="text" name="textfield9" id="gg"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td>Mother Name</td>
    <td><label>
      <input type="text" name="textfield10" id="hh"/>
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td height="38">Marriage</td>
    <td><label>
      <input type="text" name="textfield11" id="ii"/>
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Adhar</td>
    <td><label>
      <input type="text" name="textfield12" id="jj"/>
    </label></td>
     <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Voter id</td>
    <td><label>
      <input type="text" name="textfield13" id="kk"/>
    </label></td>
     <td><div id="k" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Passport</td>
    <td><label>
      <input type="text" name="textfield14" id="ll"/>
    </label></td>
     <td><div id="l" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td height="38">Religious Education</td>
    <td><label>
      <input type="text" name="te" id="mm" />
    </label></td>
     <td><div id="m" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Education</td>
    <td><label>
      <input type="text" name="tex" id="nn"/>
    </label></td>
     <td><div id="n" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Job</td>
    <td><label>
      <input type="text" name="textf" id="oo"/>
    </label></td>
     <td><div id="o" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input type="text" name="textfi" id="pp"/>
    </label></td>
     <td><div id="p" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
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
	
	$gender=$_POST['gender'];
	$name=$_POST['textfield2'];

	$re=$_POST['te'];
	$relation=$_POST['textfield4'];
	
	$blood=$_POST['textfield6'];
	
	$phone=$_POST['textfield7'];
	$email=$_POST['textfield8'];
	
	$fname=$_POST['textfield9'];
	$mname=$_POST['textfield10'];
	$marrg=$_POST['textfield11'];
	$adar=$_POST['textfield12'];
	
	$voter=$_POST['textfield13'];
	$pass=$_POST['textfield14'];
	$education=$_POST['tex'];
	$job=$_POST['textf'];
	$password=$_POST['textfi'];
	
	
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$email','$password','pending')");
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO `family_member_reg` VALUES(NULL,'$houseno','$name','$gender','$relation','$blood','$phone','$email','$fname','$mname','$marrg','$adar','$voter','$pass','$re','$education','$job','$lid')");
	if($qry>0)
	{
		?>
        <script>
		alert("Sucessfully registered...");
		window.location="index.php";
		</script>
        <?php
	}
	
}

?>

