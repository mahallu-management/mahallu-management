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
		
		 if(document.getElementById("me").value=="")
        {
            flag=false;
            document.getElementById("mem").style.visibility="visible";
        }
        else
        {
            document.getElementById("mem").style.visibility="hidden";
        }
		
        if(document.getElementById("pp").value=="")
        {
            flag=false;
            document.getElementById("p").style.visibility="visible";
        }
        else
        {
            
			en_date=document.getElementById("pp").value
			spl=en_date.split("-")
			inputTime = new Date(spl[0] + "/" + spl[1] + "/" + spl[2]).getTime();
			var today = new Date().getTime();
    		if((today - inputTime) < 0){
				
            	flag=false;
				document.getElementById("p").style.visibility="visible";
			}
			else{
				document.getElementById("p").style.visibility="hidden";	
			}
        }
		 
		 if(document.getElementById("qq").value=="")
        {
            flag=false;
            document.getElementById("q").style.visibility="visible";
        }
        else
        {
            document.getElementById("q").style.visibility="hidden";
        }
        if(document.getElementById("rr").value=="")
        {
            flag=false;
            document.getElementById("r").style.visibility="visible";
        }
        else
        {
            document.getElementById("r").style.visibility="hidden";
        }
        if(document.getElementById("ss").value=="")
        {
            flag=false;
            document.getElementById("s").style.visibility="visible";
        }
        else
        {
            document.getElementById("s").style.visibility="hidden";
        }
        return flag;
    }
	
	var xmlHttp;
            function shows(mid2){
               // alert(mid2);
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    //alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajax.php"
                url +="?hn=" +mid2
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("me").innerHTML=xmlHttp.responseText 
                   //document.getElementById("course").value=xmlHttp.responseText
                  //alert(xmlHttp.responseText);
                }
            } 
    </script>

</head>


<body>
<form action="" method="post"><table class="table table-bordered">
	<?php
	
	include("connect.php");

	$rr=mysql_query("select * from family_reg")

	?>
	  <tr>
    <td>House No </td>
    <td><label>
    
         
		<select name="textfield" id="aa" class="form-control" onChange="shows(this.value)">
		<option value="">Select</option>
			<?php
		
		while($row=mysql_fetch_array($rr)){
			?>
			<option value="<?php echo $row['hs_no']?>"><?php echo $row['hs_no']?></option>
			<?php
		}
		?>
		</select>
		
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
	 <tr>
    <td>Member </td>
    <td><label>
    
         
		<select name="mem" id="me" class="form-control">
		<option value="">Select</option>
			
		</select>
		
    </label></td>
     <td><div id="mem" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
   <tr>
    <td>Death Date</td>
    <td><label>
      <input type="date" name="dd"  id="pp" class="form-control"/>
    </label></td>
     <td><div id="p" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td height="38">Death place</td>
    <td><label>
      <input type="text" name="dp"  id="qq" class="form-control"/>
    </label></td>
     <td><div id="q" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Death Reason</td>
    <td><label>
      <input type="text" name="dr"  id="rr" class="form-control"/>
    </label></td>
     <td><div id="r" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
  <tr>
    <td>Death Informer</td>
    <td><label>
      <input type="text" name="di" id="ss" class="form-control"/>
    </label></td>
     <td><div id="s" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
 
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Register" onclick="return validate()" class="btn btn-success"/>
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
	
	$dd=$_POST['dd'];
	$dp=$_POST['dp'];
	$dr=$_POST['dr'];
	$di=$_POST['di'];
	$mem=$_POST['mem'];
	
	
	
	$qry=mysql_query("UPDATE `adminfamilymember` set mem_d_date='$dd',mem_d_place='$dp',mem_d_reason='$dr',mem_d_informer='$di' where family_mem_id='$mem'");
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