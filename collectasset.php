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
        if(document.getElementById("aa").value=="-1")
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
			en_date=document.getElementById("bb").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				
            	flag=false;
				document.getElementById("b").style.visibility="visible";
			}
			else{
				document.getElementById("b").style.visibility="hidden";	
			}
        }
        
      
        if(document.getElementById("ee").value=="-1")
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
            
			en_date=document.getElementById("gg").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) > 0){
				
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
        if(document.getElementById("oo").value=="-1")
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
<form action="" method="post">
<table class="table table-bordered">
   <tr>
    <td>Asset Name </td>
     <td><select name="textfield" id="aa" class="form-control" >
    <option value="-1">select</option>
    <?php
    	include("connect.php");
   
        $qry=mysql_query("SELECT * FROM asset_registration");
  if(mysql_num_rows($qry)>0)
  {

    while($row=mysql_fetch_array($qry)){
      ?>

        <option value="<?php echo $row['ast_id']?>"><?php echo $row['ast_nm']?></option>
      <?php
    }
  }

    ?>
   
    </select></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Collection Date</td>
    <td><label>
      <input type="date" name="textfield2" id="bb" class="form-control" />
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  
  <tr>
    <td>Rent/Lease</td>
    <td><label>
      <select name="select2" id="ee" class="form-control" >
      <option value="-1">select</option>
        <option>Rent</option>
        <option>Lease</option>
      </select>
    </label></td>
     <td><div id="e" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Starting Date </td>
    <td><label>
      <input type="date" name="textfield5" id="ff" class="form-control" />
    </label></td>
     <td><div id="f" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Expiring Date </td>
    <td><label>
      <input type="date" name="textfield6" id="gg" class="form-control" />
    </label></td>
     <td><div id="g" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Rent Amount </td>
    <td><label>
      <input type="text" name="textfield7" id="hh"class="form-control" />
    </label></td>
     <td><div id="h" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Holder Name </td>
    <td><label>
      <input type="text" name="textfield8" id="ii" class="form-control" />
    </label></td>
     <td><div id="i" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Holder House Name </td>
    <td><label>
    <input type="text" name="textfield9" id="jj" class="form-control" />
    </label></td>
     <td><div id="j" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
   
    <td>Holder phone </td>
    <td><label>
      <input type="number" name="textfield13" id="ll" class="form-control" />
    </label></td>
     <td><div id="l" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Holder Place </td>
    <td><label>
      <input type="text" name="textfield11" id="mm" class="form-control" />
    </label></td>
     <td><div id="m" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Holder Pin </td>
    <td><label>
      <input type="number" name="textfield12" id="nn" class="form-control" />
    </label></td>
     <td><div id="n" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Holder District </td>
    <td><select name="select" id="oo" class="form-control"  >
     

 <option value="-1">select</option>
      <option>Kasaragod</option>
          <option>Kannur</option>
          <option>Wayanad</option>
          <option>Kozhikode</option>
          <option>Palakkad</option>
          <option>Thrissur</option>
          <option>Ernakulam</option>
          <option>Idukki</option>
          <option>Malappuram</option>
          <option>Kottayam</option>
          <option>Thiruvananthapuram</option>
          <option>Kollam</option>
          <option>Alappuzha</option>
          <option>Pathanamthitta</option>
      </select>
    </label></td>
     <td><div id="o" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Advance</td>
    <td><label>
      <input type="text" name="textfield10" id="pp" class="form-control" />
    </label></td>
     <td><div id="p" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Submit" onclick="return validate()" class="btn btn-success"/>
        </div>
    </label></td>
    <td></td>
    </tr>
</table>

</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	
	$assetname=$_POST['textfield'];
	$category=$_POST['textfield2'];
	
	$description=$_POST['textarea'];
	$rl=$_POST['select2'];
	$sdate=$_POST['textfield5'];
	$exdate=$_POST['textfield6'];
	$rentamt=$_POST['textfield7'];
	$holdname=$_POST['textfield8'];
	$holph=$_POST['textfield13'];
	$holhouse=$_POST['textfield9'];
	$advance=$_POST['textfield10'];
	$holderplace=$_POST['textfield11'];
	$holdpin=$_POST['textfield12'];
	$holddis=$_POST['select'];
	
	$ress=mysql_query("SELECT * FROM `asset_registration` WHERE `ast_id`='$assetname'");
	$rr=mysql_fetch_array($ress);
	$aname=$rr['ast_nm'];
	$des=$holdname.",".$holderplace;
	$leg=$rentamt."/".$category;
	
	$res=mysql_query("SELECT * FROM `ledger_account_reg` ORDER BY lg_id DESC LIMIT 1");
	$am=0;
	if(mysql_num_rows($res)>0){
		$s=mysql_fetch_array($res);
		$am=$s[3];
	}
	$total=$am+$rentamt;
	$qr=mysql_query("INSERT INTO `ledger_account_reg` VALUES(NULL,'$aname','$rl','$total','$des','$leg')");
	$qry=mysql_query("insert into `asset_collection` values(null,'$assetname','$category','$description','$rl','$sdate','$exdate','$rentamt','$holdname','$holph','$holhouse','$advance','$holderplace','$holdpin','$holddis')");
	if($qry>0)
	{
		?>
        <script>
		alert("Asset added...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>
<?php include("footer.php")?>