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
       if(document.getElementById("ee").value.length!=10)
        {
            flag=false;
            document.getElementById("e").style.visibility="visible";
        }
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
        var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    var emailid=document.getElementById("ff").value;
    var matchArray = emailid.match(emailPat);
    if (matchArray == null)
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
			en_date=document.getElementById("gg").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				
            	flag=false;
				document.getElementById("g").style.visibility="visible";
			}
			else{
				document.getElementById("g").style.visibility="hidden";	
			}
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
		if(document.getElementById("ii").value.length!=6)
        {
            flag=false;
            document.getElementById("i").style.visibility="visible";
        }
        else
        {
            document.getElementById("i").style.visibility="hidden";
        }
       
        return flag;
    }
    </script>

</head>

<body>
<form action="" method="post"><table class="table table-bordered">
  
  

  <tr>
    <td>Institution Name:</td>
    <td><label>
      <input type="text" name="a" id="aa" class="form-control"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Institution Type:</td>
    <td><label>
      <input type="text" name="b" id="bb" class="form-control"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Institution No:</td>
    <td><label>
      <input type="text" name="c" id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Institution Place</td>
    <td><label>
      <input type="text" name="d" id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><label>
      <input type="number" name="e" id="ee" class="form-control"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label>
      <input type="email" name="f" id="ff" class="form-control"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Established Date</td>
    <td><label>
      <input type="date" name="g" id="gg" class="form-control"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 <tr>
    <td>Post</td>
    <td><label>
      <input type="text" name="h" id="hh" class="form-control"/>
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Pin</td>
    <td><label>
      <input type="number" name="i" id="ii" class="form-control"/>
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
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
	$a=$_POST['a'];
	
	
	$b=$_POST['b'];
	
	
	$c=$_POST['c'];
	
	$d=$_POST['d'];
	
	
	$e=$_POST['e'];
	
	
	$f=$_POST['f'];
	$g=$_POST['g'];
	$h=$_POST['h'];
	$i=$_POST['i'];
	
	
	
	
	
	$qry=mysql_query("INSERT INTO institution_reg VALUES(NULL,'$b','$c','$a','$g','$d','$f','$e','$h','$i')");
	if($qry>0)
	{
		?>
        <script>
		alert("Sucessfully registered..");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>

<?php include("footer.php")?>