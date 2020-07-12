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
		 if(document.getElementById("rn").value=="-1")
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
			en_date=document.getElementById("ff").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				flag=false;
				document.getElementById("f").style.visibility="visible";
			}
			else{
				document.getElementById("f").style.visibility="hidden";	
			}
        }
        if(document.getElementById("gg").value=="")
        {
            flag=false;
            document.getElementById("g").style.visibility="visible";
        }
        else
        {
			mrge_date=document.getElementById("ff").value
			spl2=mrge_date.split("-")
			mrge_date2 = new Date(spl2[0] + "/" + spl2[1] + "/" + spl2[2]).getTime();
			
			en_date=document.getElementById("gg").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				flag=false;
				document.getElementById("g").style.visibility="visible";
			}
			else if((inputTime-mrge_date2)<0){
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
       
        return flag;
    }
    </script>

</head>

<body>
<form action="" method="post"><table class="table table-bordered">
  
  

  <tr>
    <td>House No:</td>
    <td><label>
      <input type="text" name="a" id="aa" class="form-control"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Marriage Registration No:</td>
     
    <td><select name="rn" id="rn" class="form-control" >
    <option value="-1">select</option>
    <?php
    	include("connect.php");
   
        $qry=mysql_query("SELECT * FROM marriage_reg");
  if(mysql_num_rows($qry)>0)
  {

    while($row=mysql_fetch_array($qry)){
      ?>

        <option value="<?php echo $row['m_id']?>"><?php echo $row['registration_no']?></option>
      <?php
    }
  }

    ?>
   
    </select></td>
     <td><div id="r" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Husband Name:</td>
    <td><label>
      <input type="text" name="b" id="bb" class="form-control"/>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Husband House Name:</td>
    <td><label>
      <input type="text" name="c" id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Wife Name:</td>
    <td><label>
      <input type="text" name="d" id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Wife House Name:</td>
    <td><label>
      <input type="text" name="e" id="ee" class="form-control"/>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Marriage Date</td>
    <td><label>
      <input type="date" name="f" id="ff" class="form-control"/>
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Divorce Date</td>
    <td><label>
      <input type="date" name="g" id="gg" class="form-control"/>
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 <tr>
    <td>Divorce Type</td>
    <td><label>
      <input type="text" name="h" id="hh" class="form-control"/>
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Divorce Reason</td>
    <td><label>
      <input type="text" name="i" id="ii" class="form-control"/>
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
   <tr>
    <td>Verified Person</td>
    <td><label>
      <input type="text" name="j" id="jj" class="form-control"/>
    </label></td>
     <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
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
	$rn=$_POST['rn'];
	
	
	$f=$_POST['f'];
	$g=$_POST['g'];
	$h=$_POST['h'];
	$i=$_POST['i'];
	$j=$_POST['j'];
	
	
	
	
	
	$qry=mysql_query("INSERT INTO divorce_registration VALUES(NULL,'$rn','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
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